<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
            </button>
<!--            <img id="logito" src="../recursos/logo/Logo3.jpg">-->
            <a class="navbar-brand" href="#">WorkNet</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search for Users"  onkeyup="getStates(this.value)">

                    </div>
                    <button type="submit" class="btn btn-default"><span class="fui-search"></span></button>
                </form>
                <li class="active"><a href="#"></a></li>
                <li><a href="../controladores/publicar.php"><span class="fui-home"></span> Home</a></li>                
                <li><a href="./perfil_Mostrar.php"><span class="fui-user"></span> Profile</a></li>                
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="fui-gear"></span> Account<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><span class="help-block" id="mover"><i class="fa fa-search"></i> Search Friends</span></li>
                        <li class="divider"></li>
                        <li><a href="../controladores/buscarempresas.php"><i class="fa fa-building-o"></i> Enterprises</a></li>
                        <li><a href="../controladores/buscarusuarios.php "><i class="fa fa-users"></i> Users</a></li>
                        <li class="divider"></li>
                        <li><a href="../controladores/crearformCambiarcontra-Empre.php"><span class="fui-gear"></span> Change Password</a></li>
                        <li><a href="logout.php"><span class="fui-power"></span> Log Out</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--<div class="well search"><a href="" class="dropdown-toggle" data-toggle="dropdown"><div id="results"></div> </a></div>-->

<script type="text/javascript">
    
    function getStates(value){
         var results=$("#results")

        $.post("../logica/getStates.php", {partialState:value}, function(data) {
            $("#results").html(data);
            
            if(results.length < 1){
                $("#results").parent().addClass("hidden");
            }
        });
    }
</script>
    
    