<style>
 .social-bar {
	position: fixed;
	right: 0;
	top: 46%;
	font-size: 1.5rem;
	display: flex;
	flex-direction: column;
	align-items: flex-end;
	z-index: 100;
}

@media(max-width: 767px){
	.social-bar {
	position: fixed;
	right: 0;
	top: 56%;
	font-size: 1.5rem;
	display: flex;
	flex-direction: column;
	align-items: flex-end;
	z-index: 100;
}
}

.icon {
	color: white;
	text-decoration: none;
	padding: .7rem;
	display: flex;
	transition: all .5s;
}

.fa-facebook2 {
	background-image: linear-gradient(350deg, #5974a6 0, #0f5699 50%, #003b8c 100%);
    padding-right: 18px;
    
}

.fa-facebook-messenger {
	background-color: #a2cbff;
	background-image: radial-gradient(circle at 50% -3.03%, #a2cbff 0, #0e90f0 50%, #005ad6 100%);
	padding-right: 9px;
	
}

.fa-whatsapp2 {
	background-image: radial-gradient(circle at 45.31% 103.62%, #70c900 0, #4fc700 25%, #13c40d 50%, #00c120 75%, #00be2f 100%);
	padding-right: 12px;
	
		
}

.fa-telegram2 {
	background-image: linear-gradient(0, #4fcaf1 0, #0fbded 50%, #00b0ea 100%);
    padding-right: 9px;
    

}

.fa-instagram2 {
	background: #d6249f;
    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
    box-shadow: 0px 3px 10px rgba(0,0,0,.25);
    padding-right: 11px;

}

.icon:first-child {
	border-radius: 1rem 0 0 0;
}

.icon:last-child {
	border-radius: 0 0 0 1rem;
}

.icon:hover {
	padding-right: 3rem;
	border-radius: 1rem 0 0 1rem;
	box-shadow: 0 0 .5rem rgba(0, 0, 0, 0.42);
}
 

  
</style>

<div class="social-bar">
    <a href="https://www.facebook.com/solucionescctvysistemas/" class="icon fa fa-facebook2 fa-facebook" target="_blank"></a>
    
    <a href="https://m.me/solucionescctvysistemas/" class="icon fab fa-facebook-messenger" target="_blank"></a></i>
    
    <a href="https://api.whatsapp.com/send?phone=51996727562&text=hola,%20qu%C3%A9%20tal?" class="icon fa fa-whatsapp2 fa-whatsapp" target="_blank"></a>
       
     <a href="https://t.me/solucionescctvysistemas/" class="icon fa fa-telegram2 fa-telegram" target="_blank"></a> 
    
    <a href="https://www.instagram.com/solucionescctvysistemas/" class="icon fa fa-instagram2 fa-instagram" target="_blank"></a>
   
  </div>
