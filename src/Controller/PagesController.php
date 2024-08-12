<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;


/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/5/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function index(){
        $getBlogs = $this->fetchTable("Blogs")->find()->order(["date_added"=>"desc"])->limit(2);
        $this->set(compact("getBlogs"));

    }

    public function viewBlog($seoUrl){
        $getBlog = $this->fetchTable("Blogs")->find()->where(["seo_url"=>$seoUrl])->first();

        $pageTitle = $getBlog["blog_title"];
        $metaTitle = $getBlog["meta_title"];
        $metaDescription = $getBlog["meta_description"];
        $keywords = $getBlog["meta_keyword"];

        $recentPosts = $this->fetchTable("Blogs")->find()->where(["id !="=>$getBlog["id"]])->order(["date_added"=>"desc"])->limit(5);
        $this->set(compact("recentPosts"));


        $this->set(compact("getBlog","pageTitle","metaTitle","metaDescription","keywords"));
    }

    public function about(){

    }
    public function contact(){
        
    }
    public function services(){
        
    }
   
    public function viewService($slug){
        $getService = $this->fetchTable("Services")->find()->where(["slug"=>$slug])->first();

        $pageTitle = $getService["service_title"];
       

        $this->set(compact("getService"));
    }
    public function allBlogs(){
        $latestPost = $this->fetchTable("Blogs")->find()->order(["date_added"=>"desc"])->first();
        $this->set(compact("latestPost"));

        $remainingPosts = $this->fetchTable("Blogs")->find()->where(["id !="=>$latestPost["id"]])->order(["date_added"=>"desc"]);
        $remainingPosts = $this->paginate($remainingPosts);
        $this->set(compact("remainingPosts"));


    }
    public function terms(){

    }
    public function privacyPolicy(){
        
    }

    public function subscribeMe(){
        $email = $_GET["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "<span style='color:#f00'>Invalid email format</span>";
        }else{
            $subscriber = $this->fetchTable("Subscribers");

            if($subscriber->exists(["email"=>$email])){
                $emailErr = "<span style='color:#f00'>You are already subscribed</span>";
            }else{
                $newSubscriber = $subscriber->newEmptyEntity();
                $subscriberData["email"] = $email;
                $subscriberData["subscription_date"] = date("Y-m-d H:i:s");
                $subscriberData["status"] = 1;
                $newSubscriber = $subscriber->patchEntity($newSubscriber,$subscriberData);
                $subscriber->save($newSubscriber);
                $emailErr = "<span style='color:#28a745;'>You have subscribed successfully</span>";
            }
    
        }

        echo $emailErr; die;
      

    }

    public function quoteRequest(){

        if($this->request->is("post")){
            $data = $this->request->getData();
            if (isset($_POST['g-recaptcha-response'])) {
                $captcha = $_POST['g-recaptcha-response'];

                $leads = $this->fetchTable("Leads");

                $secret   = '6LezDSMqAAAAAK3PXDI3eNLqt6HOrtSpmMHcLQMB';
                $action = "submit";
                // call curl to POST request
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $secret, 'response' => $captcha)));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                $arrResponse = json_decode($response, true);

                pry($arrResponse);

                if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {

                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $IP = $_SERVER['HTTP_CLIENT_IP'];
                    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $IP = $_SERVER['REMOTE_ADDR']; 
                    }


                    $newLead = $leads->newEmptyEntity();
                    $leadData["full_name"] = $data["full_name"];
                    $leadData["email"] = $data["email"];
                    $leadData["mobile"] = $data["mobile"];
                    $leadData["message"] = $data["message"];
                    $leadData["ip_address"] = $IP;
                    $leadData["country_code"] = $data["country"];
                    $leadData["browser"] = $_SERVER["HTTP_USER_AGENT"];
                    $leadData["date_added"] = date("Y-m-d H:i:s");
                    $newLead = $leads->patchEntity($newLead,$leadData);
                    $leads->save($newLead);


                    $content = "Hello, <br/><br/>";
                    $content .="Please check the below query posted on website: <br/><br/>";
                    
                    $content .= "<table border='1' cellspacing='0' cellpadding='5'><thead><th>Full Name</th><th>Email</th><th>Country Code</th><th>Mobile</th><th>Message</th></thead><tbody>";
                    $content .= "<tr><td>".$data["full_name"]."</td><td>".$data["email"]."</td><td>".$data["country"]."</td><td>".$data["mobile"]."</td><td>".$data["message"]."</td></tr>";
                    
                    $content .= "</tbody></table>";


                    TransportFactory::setConfig('gmail', [
                        'host' => 'smtp.gmail.com',
                        'port' => 587,
                        'username' => 'cv@jobgully.com',
                        'password' => 'vzwouodzjhlxescb',
                        'className' => 'Smtp',
                        'tls' => true
                    ]);

                    $email_subject = "ONMEPRO - Wesbite Query / ".date("d F Y");

                    $mailer = new Mailer();
                    $mailer->setProfile(['from' => 'cv@jobgully.com', 'transport' => 'gmail'])
                    ->setEmailFormat('html')
                    ->setTo("arihant@aritone.com")
                    ->setSubject($email_subject)
                    ->deliver($content);



                    $message = "success";
                } else {
                    $message = "form-error";
                }
            } else {
                $message = "captcha-error";
            }
            echo $message;
            die;
        }
        
    }



}