<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	@import url('https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-thin-straight/css/uicons-thin-straight.css');


	*{
		margin: 0;
		padding: 0;
		font-family: 'Poppins', sans-serif;
	}
	.bg-stack{
		background-color: #5182ED;
	}
	.bg-stack-grad{
		background-image: linear-gradient(to right, #7351ed, #6b66f1, #6878f2, #6a88f1, #7396ee, #7499ec, #769ceb, #789fe9, #6e98ea, #6491ec, #5a89ec, #5182ed);
	}
	.fluter{
		transform: translateY(0px);
		animation: float 3s ease-in-out infinite;
	}
	@keyframes float{
		0%{
			transform: translateY(0px);
		}
		50%{
			transform: translateY(-30px);
		}
		100%{
			transform: translateY(0px);
		}
	}
	.login-background{
		background-color: #3e46e6;
	}
	.card-login{
		margin-top: 15%;
		border: 0;
		border-radius: 0;
		max-width: 600px;
		text-align: left;
	}
	.title-login{
		color: #2C36FF;
		font-size: 20px;
	}
	.body-login{
		padding: 30px;
	}
	.title-input{
		color: #5e5e5e;
		margin-top: 30px;
	}
	.form-login{
		background-color: #ebebeb;
		border: 0;
		padding: 10px;
	}
	.form-check{
		margin-top: 25px;
		float: left;
	}
	.form-forgot{
		float: right;
		margin-top: 25px;
	}
	.form-forgot a{
		text-decoration: none;
	}
	.btn-login{
		margin-top: 25px;
		background-color: #2C36FF;
		border: 0;
		color: #fff;
		width: 100%;
		padding: 15px;
	}
	.btn-login:hover{
		transition: 150ms;
		color: #fff;
		background-color: #1923e6;
	}
</style>