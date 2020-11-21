
<header class="header">
    
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#0063B2FF">
        <a href="#"><img src="./img/logo.png" alt="" style="height: 50px"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="/" class="nav-item nav-link active" style="color: black">Home</a>
            <a href="{{ url('/support')}}" class="nav-item nav-link" style="color: black">Support</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: black">Products</a>
                    <div class="dropdown-menu">
                        <a href="{{ url('/printers')}}" class="dropdown-item" style="color: black">Printers</a>
                    <a href="{{ url('/toners')}}" class="dropdown-item" style="color: black">Toners</a>
                    </div>
                </div>
            <a href="{{ url('/about')}}" class="nav-item nav-link" style="color: black">About</a>
            <a href="{{ url('contact')}}" class="nav-item nav-link" style="color: black">Contact</a>
            </div>
        </div>
    </nav>
          
        </div>

     
    </div>
    </header>