function tg_title_animation(){if(!jQuery(".tg-heading-subheading").length)return;let t=document.querySelectorAll(".tg-heading-subheading .tg-element-title");t.forEach(t=>{t.animation&&(t.animation.progress(1).kill(),t.split.revert());var e=t.closest(".tg-heading-subheading").className.split("animation-");"style4"!=e[1]&&(t.split=new SplitText(t,{type:"lines,words,chars",linesClass:"split-line"}),gsap.set(t,{perspective:400}),"style1"==e[1]&&gsap.set(t.split.chars,{opacity:0,y:"90%",rotateX:"-40deg"}),"style2"==e[1]&&gsap.set(t.split.chars,{opacity:0,x:"50"}),"style3"==e[1]&&gsap.set(t.split.chars,{opacity:0}),t.animation=gsap.to(t.split.chars,{scrollTrigger:{trigger:t,start:"top 90%"},x:"0",y:"0",rotateX:"0",opacity:1,duration:2,ease:Back.easeOut,stagger:.02}))})}gsap.registerPlugin(ScrollTrigger,SplitText),gsap.config({nullTargetWarn:!1,trialWarn:!1}),ScrollTrigger.addEventListener("refresh",tg_title_animation);