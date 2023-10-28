class MobileMenu{
    constructor(mobileMenu, navList, navLinks){
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    } //Cons

    animateLinks(){
        this.navLinks.forEach((link, index)=> {
            console.log(index)
                link.style.animation
                ? (link.style.animation = "")
                : (link.style.animation = 'navLinkFade 0.5s ease forwards ${index / 7+ 0.3}s');
        }); //animate
    }

    handleClick(){
        console.log(this)
        this.navList.classList.toggle(this.activeClass);
        this.animateLinks();
    }//handle 

    addClickEvent(){
        this.mobileMenu.addEventListener("click", this.handleClick);
    
    } //ClickEvent

    init(){
        if(this.mobileMenu){
            this.addClickEvent();
        } //if
            return this;
    } //init

} //MobileMenu

const mobileMenu = new MobileMenu(
    ".menu-mobile",
    ".menu-nav",
    ".menu-nav > li",


); //Const

mobileMenu.init();