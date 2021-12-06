<?php
    
    session_start();
    if(isset($_GET["value"])){
        $_SESSION["value"]=$_GET["value"];
        $vb = $_SESSION["value"];
        // echo "<script>createalert('".."')</script>";
        echo "<script>
            document.getElementById('display').innerHTML=".$_SESSION['value']."</br>;
        </script>";
    }

?>

<HTML>
    <HEAD>
    </HEAD>
        <BODY>
            <script>
                function createalert(value){
                    alert(value);
                }
            <div id="display">
            </div>
            <form>
                <input type="text" name="value">
                <input type="submit">
            </form>
        </BODY>
</HTML>