<style>
 .social-bar {
	position: fixed;
	right: 0;
	top: 42%;
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
	top: 55%;
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
	background: #2E406E;
    padding-right: 20px;
}

.fa-whatsapp2 {
	background: #0a8b0e;
	padding-right: 12px;
}

.fa-youtube2 {
	background: #E83028;
    padding-right: 12px;
}

.fa-instagram2 {
	background: #3F60A5;
    padding-right: 12px;
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
    <a href="https://api.whatsapp.com/send/?phone=51996727562&text&app_absent=0" class="icon fa fa-whatsapp2 fa-whatsapp" target="_blank"></a>
    <a href="https://www.youtube.com/channel/UCNI4wnYU1I9nBuX_JOmjZxA" class="icon fa fa-youtube2 fa-youtube" target="_blank"></a>
    <a href="https://www.instagram.com/solucionescctvysistemas/" class="icon fa fa-instagram2 fa-instagram" target="_blank"></a>
  </div>
