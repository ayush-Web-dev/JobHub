@extends('master')
        <head>
            <link rel="stylesheet" href="{{ 'css/logout.css' }}" />
            <title>JobHub - Login Failed</title>
        </head>
            <body>	
                <div class="logo">
                    <a href="/login">                  
                        <img src="{{ url("images/logo.jpg") }}" />
                    </a>   
                </div>
                <div class="container-fluid mt-5 pt-4">
                    <div class="row justify-content-center">
                        <div class="failed text-center">
                           <span id="failed-head">Sorry, but unable to Login </span>
                        </div>  
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-3 btns-container mt-5 px-0">
                            <a id="fst" href="/login"> Back to Login </a>
                            <a id="snd" href="/"> New to JobHub? </a>
                        </div>
                    </div>
                </div>     
            </body>
        </html>
        