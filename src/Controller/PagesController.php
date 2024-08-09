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
        
    }
    public function terms(){

    }
    public function privacyPolicy(){
        
    }

}