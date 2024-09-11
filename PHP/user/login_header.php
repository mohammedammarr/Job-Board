
<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>

<style>
body{
    margin: 0;
}
.headerbar{
    margin-top: -30px;
    padding: 0;
    height: 50px;
    background-color: #13544e;
   
}
.headerbar h3{
    padding: 5px;
    text-align: center;
    font-size: 30px;
    color: white;
}
    header {
    overflow: hidden;
}




</style>
    <header>
        
        <script>
            var text = ['Welcome to <?php echo $_SESSION['fName'].' '.$_SESSION['lName']; ?>', 'The #1 site for Remote Jobs ', 'Find your best Job '];
            var index = 0;

            function printText() {
                document.getElementById('movetext').innerHTML = text[index];

                if (index == text.length - 1) {
                    index = -1;
                }
                index++;
                setTimeout(printText, 30500);
            }
            printText();
        </script>
    </header>

