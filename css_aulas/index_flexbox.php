<html>
    <head>
        <title>Teste de CSS</title>
        <style>
            .container1 {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                align-content: center;
                row-gap: 10px;
                column-gap: 30px;
                /*indiferente*/
                background-color: #f9eac3;
                padding: 16px;
                height: 150px;
            }
            .container2 {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                align-content: center;
                row-gap: 10px;
                column-gap: 30px;
                /*indiferente*/
                background-color: #f9eac3;
                padding: 16px;
                height: 150px;
            }              
            .bloco-1 {
                background-color: aqua;
                width: 50px;
                height: 50px;
                order:0;
            }
            .bloco-2 {
                background-color: blueviolet;
                width: 50px;
                height: 50px;
                order:0;                
            }
            .bloco-3 {
                background-color: cadetblue;
                width: 50px;
                height: 50px;
                order:0;    
            }
            .bloco-4 {
                background-color: darkcyan;
                width: 50px;
                height: 50px;
                order:0;
            }
            .bloco-5 {
                background-color: aqua;
                width: 50px;
                height: 50px; 
            }
            .bloco-6 {
                background-color: blueviolet;
                width: 50px;
                height: 50px; 
            }
            .bloco-7 {
                background-color: cadetblue;
                width: 50px;
                height: 50px; 
            }
            .bloco-8 {
                background-color: darkcyan;
                width: 50px;
                height: 50px; 
            } 
            .bloco-9 {
                background-color: background;
                width: 50px;
                height: 50px; 
            }
            .bloco-10 {
                background-color: blue;
                width: 50px;
                height: 50px; 
            }
            .bloco-11 {
                background-color: burlywood;
                width: 50px;
                height: 50px; 
            }
            .bloco-12 {
                background-color: darkcyan;
                width: 50px;
                height: 50px; 
            }
            /*Bloco para verificar a ordem de acordo com ORDER*/
            .bloco-p1 {
                background-color: aqua;
                width: 50px;
                height: 50px;
                order:3;
            }
            .bloco-p2 {
                background-color: blueviolet;
                width: 50px;
                height: 50px;
                order:1;                
            }
            .bloco-p3 {
                background-color: cadetblue;
                width: 50px;
                height: 50px;
                order:2;    
            }
            .bloco-p4 {
                background-color: darkcyan;
                width: 50px;
                height: 50px;
                order:0;
            }
            /*Bloco para verificar a ordem de acordo com ORDER com numeros negativos*/
            .bloco-b1 {
                background-color: aqua;
                width: 50px;
                height: 50px;
                order:-1;
            }
            .bloco-b2 {
                background-color: blueviolet;
                width: 50px;
                height: 50px;
                order:2;                
            }
            .bloco-b3 {
                background-color: cadetblue;
                width: 50px;
                height: 50px;
                order:1;    
            }
            .bloco-b4 {
                background-color: darkcyan;
                width: 50px;
                height: 50px;
                order:0;
            }            
        </style>
    </head>
    <body>
        <hr>
        <h4>1) display: flex; flex-direction: row; justify-content: center; align-items: center; flex-wrap: wrap; align-content: center; row-gap: 10px; column-gap: 30px; 
            /*indiferente*/ background-color: #f9eac3; padding: 16px; height: 500px;</h4>
        <main class="container1">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-5">5</div>
            <div class="bloco-6">6</div>
            <div class="bloco-7">7</div>
            <div class="bloco-8">8</div>
            <div class="bloco-9">9</div>
            <div class="bloco-10">10</div>
            <div class="bloco-11">11</div>
            <div class="bloco-12">12</div>  
        </main>
        <hr>
        <h4>2) Order: 3 , 1 , 2 , 0</h4>
        <main class="container2">
            <div class="bloco-p1">1</div>
            <div class="bloco-p2">2</div>
            <div class="bloco-p3">3</div>
            <div class="bloco-p4">4</div>
        </main>
        <hr>
        <h4>3) Bloco para verificar a ordem de acordo com ORDER com numeros negativos ( -1 , 2 , 1 , 0 )</h4>
        <main class="container2">
            <div class="bloco-b1">1</div>
            <div class="bloco-b2">2</div>
            <div class="bloco-b3">3</div>
            <div class="bloco-b4">4</div>
        </main>
        <hr>
        <h4>4) Mostrando como funcionam as 12 Divs repetindo as classes.</h4>
        <main class="container2">
            <div class="bloco-p1">1</div>
            <div class="bloco-p2">2</div>
            <div class="bloco-p3">3</div>
            <div class="bloco-p4">4</div>
            <div class="bloco-p1">5</div>
            <div class="bloco-p2">6</div>
            <div class="bloco-p3">7</div>
            <div class="bloco-p4">8</div>
            <div class="bloco-p1">9</div>
            <div class="bloco-p2">10</div>
            <div class="bloco-p3">11</div>
            <div class="bloco-p4">12</div>  
        </main>        
        
    </body>
</html>
