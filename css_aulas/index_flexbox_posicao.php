<html>
    <head>
        <title>Teste de CSS</title>
        <style>
            .container1 {
                display: flex;
            }
            .container2 {
                display: flex;
                flex-direction: row-reverse;
            }
            .container3 {
                display: flex;
                flex-direction: column;
            }
            .container4 {
                display: flex;
                flex-direction: column-reverse;
            }
            .container5 {
                display: flex;
                justify-content: flex-start;
            }
            .container6 {
                display: flex;
                justify-content: flex-end;
            } 
            .container7 {
                display: flex;
                justify-content: center;
            }
            .container8 {
                display: flex;
                justify-content: space-between;
            }
            .container9 {
                display: flex;
                justify-content: space-around;
            } 
            .container10 {
                display: flex;
                background-color: black;
                height: 150px;
                align-items: flex-start;
            }             
            .container11 {
                display: flex;
                background-color: black;
                height: 150px;
                align-items: flex-end;
            }
            .container12 {
                display: flex;
                background-color: black;
                height: 150px;
                align-items: center;
            }                
            .container13 {
                display: flex;
                background-color: black;
                height: 150px;
                justify-content: center;
                align-items: center;
            }
            .container14 {
                display: flex;
                background-color: black;
                height: 150px;
                justify-content: center;
                align-items: stretch;
            }
            .container15 {
                display: flex;
                background-color: black;
                height: 150px;
                justify-content: center;
                align-items: baseline;
            }
            .container16 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: nowrap;
            }
            .container17 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: wrap;
            }
            .container18 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: wrap-reverse;
            }
            .container19 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: wrap;
                align-content: flex-start;
            }
            .container20 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: wrap;
                align-content: flex-end;
            }
            .container21 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: wrap;
                align-content: center;
            }
            .container22 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: wrap;
                align-content: space-between;
            }
            .container23 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: wrap;
                align-content: space-around;
            }
            .container24 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: wrap;
                gap: 20px;
            }
            .container25 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: wrap;
                row-gap: 50px;
            }
            .container26 {
                display: flex;
                background-color: black;
                height: 150px;
                width: 500px;
                flex-wrap: wrap;
                column-gap: 50px;
            }              
            .bloco-1 {
                background-color: aqua;
                width: 50px;
                height: 50px;
            }
            .bloco-2 {
                background-color: blueviolet;
                width: 50px;
                height: 50px;                
            }
            .bloco-3 {
                background-color: cadetblue;
                width: 50px;
                height: 50px;                
            }
            .bloco-4 {
                background-color: darkcyan;
                width: 50px;
                height: 50px;                
            }
            .bloco-5 {
                background-color: aqua;
                width: 50px;
            }
            .bloco-6 {
                background-color: blueviolet;
                width: 50px;
            }
            .bloco-7 {
                background-color: cadetblue;
                width: 50px;
            }
            .bloco-8 {
                background-color: darkcyan;
                width: 50px;
            }                
        </style>
    </head>
    <h4>Flex Direction Row</h4>
        <main class="container1">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Flex Direction Row Reverse</h4>
        <main class="container2">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>        
    <hr>
    <h4>Flex Direction Column</h4>
        <main class="container3">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Flex Direction Column Reverse</h4>
        <main class="container4">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>      
    <hr>
    <h4>Justify-Content: Flex-Start</h4>
        <main class="container5">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Justify-Content: Flex-End</h4>
        <main class="container6">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Justify-Content: Center</h4>
        <main class="container7">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Justify-Content: Space-Between</h4>
        <main class="container8">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Justify-Content: Space-Around</h4>
        <main class="container9">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Align-items: Flex-Start;</h4>
        <main class="container10">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Align-items: Flex-end;</h4>
        <main class="container11">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Align-items: Center;</h4>
        <main class="container12">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Align-items: Center; Justify-Content: Center</h4>
        <main class="container13">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
        </main>
    <hr>
    <h4>Align-items: Stretch; Justify-Content: Center</h4>
        <main class="container14">
            <div class="bloco-5">5</div>
            <div class="bloco-6">6</div>
            <div class="bloco-7">7</div>
            <div class="bloco-8">8</div>
        </main> 
    <hr>
    <h4>Align-items: Base-Line; Justify-Content: Center</h4>
        <main class="container15">
            <div class="bloco-1"><h1>1</h1></div>
            <div class="bloco-2"><h2>2</h2></div>
            <div class="bloco-3"><h3>3</h3></div>
            <div class="bloco-4"><h4>4</h4></div>
        </main>
    <hr>
    <h4>Flex-Wrap: Nowrap;</h4>
        <main class="container16">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main>
    <hr>
    <h4>Flex-Wrap: Wrap;</h4>
        <main class="container17">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main>
    <hr>
    <h4>Flex-Wrap: Wrap-Reverse;</h4>
        <main class="container18">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main> 
    <hr>
    <h4>Flex-wrap: Wrap; Align-Content: Flex-Start;</h4>
        <main class="container19">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main>       
    <hr>
    <h4>Flex-wrap: Wrap; Align-Content: Flex-End;</h4>
        <main class="container20">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main>
    <hr>
    <h4>Flex-wrap: Wrap; Align-Content: Center;</h4>
        <main class="container21">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main>
    <hr>
    <h4>Flex-wrap: Wrap; Align-Content: Space-Between;</h4>
        <main class="container22">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main>
    <hr>
    <h4>Flex-wrap: Wrap; Align-Content: Space-Around;</h4>
        <main class="container23">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main>
    <hr>
    <h4>Flex-Wrap: Wrap; Gap: 20px;</h4>
        <main class="container24">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main>
    <hr>
    <h4>Flex-wrap: Wrap; Row-Gap: 50px;</h4>
        <main class="container25">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main>
    <hr>
    <h4>Flex-wrap: Wrap; Column-Gap: 50px;</h4>
        <main class="container26">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-1">5</div>
            <div class="bloco-2">6</div>
            <div class="bloco-3">7</div>
            <div class="bloco-4">8</div>
            <div class="bloco-1">9</div>
            <div class="bloco-2">10</div>
            <div class="bloco-3">11</div>
            <div class="bloco-4">12</div>  
        </main>     
    </body>
</html>
