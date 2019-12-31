<?php require "animals.php" ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Server Sent</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/125f1cd270.js"></script>
        <script src="https://kit.fontawesome.com/41d9aa5349.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <style>
            #div1, #div2, #div3, #div4 {
                
                height: 40px;
                padding: 10px 10px;
                border: 1px solid #aaaaaa;
              
            }
        </style>
        <script>
            function allowDrop(ev) {
                ev.preventDefault();
            }

            function drag(ev) {
                ev.dataTransfer.setData("text", ev.target.id);
            }

            function drop(ev) {
                ev.preventDefault();
                var data = ev.dataTransfer.getData("text");
                ev.target.appendChild(document.getElementById(data));
            }

            $("document").ready(function () {
                $("#answer").click(function () {
                    alert($("#div1").children().attr("id"));
                });
            });
        </script>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <h1>Quiz: HTML</h1>
                <h3>Put the code in order</h3>
            </div>
            <div class="row">
                <div class="col">

                    <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">

                    </div><br/>
                    <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">

                    </div><br/>
                    <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)">

                    </div><br/>
                    <div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)">

                    </div><br/>
                    <div class="col text-right">
                        <button  id="answer" type="submit" class="btn btn-primary">Answer</button>
                    </div>
                </div>
                <div class="col">
                    <span id="drag1" draggable="true" ondragstart="drag(event)" class="btn-secondary px-3"><i class="fas fa-ellipsis-v">  &ltHTML&gt</i></span><br/>
                    <span id="drag2" draggable="true" ondragstart="drag(event)" class="btn-secondary px-3"><i class="fas fa-ellipsis-v">  CSS</i></span><br/>
                    <span id="drag3" draggable="true" ondragstart="drag(event)" class="btn-secondary px-3"><i class="fas fa-ellipsis-v">  XML</i></span><br/>
                    <span id="drag4" draggable="true" ondragstart="drag(event)" class="btn-secondary px-3"><i class="fas fa-ellipsis-v">  Javascript</i></span><br/>
                    <span id="drag4" draggable="true" ondragstart="drag(event)" class="btn-secondary px-3"><i class="fas fa-ellipsis-v">  Ajax</i></span><br/>
                    <span id="drag4" draggable="true" ondragstart="drag(event)" class="btn-secondary px-3"><i class="fas fa-ellipsis-v">  Ruby</i></span><br/>
                    <span id="drag4" draggable="true" ondragstart="drag(event)" class="btn-secondary px-3"><i class="fas fa-ellipsis-v">  Python</i></span><br/>

                </div>

            </div>
            <div class="row">
                <div class="col">

                </div>

            </div>



            <!--            <ul id="availableAnimals">
            <?php foreach ($animals as $animal): ?>
                                    <li><?php echo $animal; ?></li>
            <?php endforeach;
            ?>
                        </ul>-->
            <script src="script.js"></script>
    </body>
</html>
