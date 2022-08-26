<html>
    <head>
        <title>Teste de CSS</title>
        <style>
            .container1, .container2, .container3 {
                text-align: center;
                font-size:40px;
                font-family: 'Courier New', Courier, monospace;
                border-radius: 16px;
            }
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
                width: 190px;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                flex-wrap: nowrap;
                align-content: center;
                row-gap: 10px;
                column-gap: 30px;
                /*indiferente*/
                background-color: #f9eac3;
                padding: 16px;
                height: 150px;
            }
            .container3 {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                flex-wrap: nowrap;
                align-content: center;
                row-gap: 10px;
                column-gap: 30px;
                /*indiferente*/
                background-color: #f9eac3;
                padding: 16px;
                height: 150px;
            }             
            .bloco-1 {
                border-radius: 16px;
                background-color: aqua;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:1;
            }
            .bloco-2 {
                border-radius: 16px;
                background-color: blueviolet;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:1;
            }
            .bloco-3 {
                border-radius: 16px;
                background-color: cadetblue;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:1;
            }
            .bloco-4 {
                border-radius: 16px;
                background-color: darkcyan;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:1;
            }
            .bloco-5 {
                background-color: aqua;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:1;
            }
            .bloco-6 {
                border-radius: 16px;
                background-color: blueviolet;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:0;
            }
            .bloco-7 {
                border-radius: 16px;
                background-color: cadetblue;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:0;
            }
            .bloco-8 {
                border-radius: 16px;
                background-color: darkcyan;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:0;
            } 
            .bloco-9 {
                border-radius: 16px;
                background-color: background;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:0;
            }
            .bloco-10 {
                border-radius: 16px;
                background-color: blue;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:0;
            }
            .bloco-11 {
                border-radius: 16px;
                background-color: burlywood;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:0;
            }
            .bloco-12 {
                border-radius: 16px;
                background-color: darkcyan;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:0;
            }
            /* FLEX SHRINK*/
            .bloco-A1 {
                border-radius: 16px;
                background-color: aqua;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:0;
                flex-shrink:0;
            }
            .bloco-A2 {
                border-radius: 16px;
                background-color: blueviolet;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:0;
                flex-shrink:1;
            }
            .bloco-A3 {
                border-radius: 16px;
                background-color: cadetblue;
                width: 50px;
                height: 50px;
                order:0;
                flex-grow:0;
                flex-shrink:2;
            }
            /* FLEX BASIS*/
            .bloco-B1 {
                border-radius: 16px;
                background-color: aqua;
                /*width: 50px;*/
                /*height: 50px;*/
                order:0;
                flex-grow:1;
                flex-shrink:1;
                flex-basis: 0;
            }
            .bloco-B2 {
                border-radius: 16px;
                background-color: blueviolet;
                /*width: 50px;*/
                /*height: 50px;*/
                order:0;
                flex-grow:1;
                flex-shrink:1;
                flex-basis: 0;
            }
            .bloco-B3 {
                border-radius: 16px;
                background-color: cadetblue;
                /*width: 50px;*/
                /*height: 50px;*/
                order:0;
                flex-grow:2;
                flex-shrink:1;
                flex-basis: 0;
            }            
            /* FLEX BASIS - COM PIXELS DEFINIDOS*/
            .bloco-C1 {
                border-radius: 16px;
                background-color: aqua;
                /*width: 50px;*/
                /*height: 50px;*/
                order:0;
                flex-grow:0;
                flex-shrink:1;
                flex-basis: 50px;
            }
            .bloco-C2 {
                border-radius: 16px;
                background-color: blueviolet;
                /*width: 50px;*/
                /*height: 50px;*/
                order:0;
                flex-grow:0;
                flex-shrink:1;
                flex-basis: 100px;
            }
            .bloco-C3 {
                border-radius: 16px;
                background-color: cadetblue;
                /*width: 50px;*/
                /*height: 50px;*/
                order:0;
                flex-grow:0;
                flex-shrink:1;
                flex-basis: 200px;
            }
            /* FLEX BASIS - COM PIXELS DEFINIDOS*/
            .bloco-D1 {
                border-radius: 16px;
                background-color: aqua;
                width: 50px;
                height: 50px;
                order:0;
                flex: 0 1 auto;
            }
            .bloco-D2 {
                border-radius: 16px;
                background-color: blueviolet;
                width: 50px;
                height: 50px;
                order:0;
                flex: 0 1 auto;
            }
            .bloco-D3 {
                border-radius: 16px;
                background-color: cadetblue;
                width: 50px;
                height: 50px;
                order:0;
                flex: 0 1 auto;
            }
            /* TESTANDO ALIGN SELF*/
            .bloco-E1 {
                border-radius: 16px;
                background-color: aqua;
                width: 50px;
                height: 50px;
                order:0;
                flex: 0 1 auto;
                align-self: flex-start;
            }
            .bloco-E2 {
                border-radius: 16px;
                background-color: blueviolet;
                width: 50px;
                height: 50px;
                order:0;
                flex: 0 1 auto;
                align-self: flex-end;
            }
            .bloco-E3 {
                border-radius: 16px;
                background-color: cadetblue;
                width: 50px;
                height: 50px;
                order:0;
                flex: 0 1 auto;
            }               
        </style>
    </head>
    <body>
        <hr>
        <h4>1) Testando FLEX-GROW - B1,B2 E B3 usando Flex-Grow: 1</h4>
        <main class="container1">
            <div class="bloco-1">1</div>
            <div class="bloco-2">2</div>
            <div class="bloco-3">3</div>
            <div class="bloco-1">4</div>
            <div class="bloco-2">5</div>
            <div class="bloco-3">6</div>
            <div class="bloco-1">7</div>
            <div class="bloco-2">8</div>
            <div class="bloco-3">9</div>
            <div class="bloco-1">10</div>
            <div class="bloco-2">11</div>
            <div class="bloco-3">12</div>  
        </main>
        <hr>
        <h4>2) Testando FLEX-GROW - B4,B5 com Flex-Grow: 1 E B6 usando Flex-Grow: 0</h4>
        <main class="container1">
            <div class="bloco-4">1</div>
            <div class="bloco-5">2</div>
            <div class="bloco-6">3</div>
            <div class="bloco-4">4</div>
            <div class="bloco-5">5</div>
            <div class="bloco-6">6</div>
            <div class="bloco-4">7</div>
            <div class="bloco-5">8</div>
            <div class="bloco-6">9</div>
            <div class="bloco-4">10</div>
            <div class="bloco-5">11</div>
            <div class="bloco-6">12</div>  
        </main>
        <hr>
        <h4>3) Testando FLEX-SHRINK - capacidade de diminuir para cada objeto</h4>
        <main class="container2">
            <div class="bloco-A1">1</div>
            <div class="bloco-A2">2</div>
            <div class="bloco-A3">3</div>
        </main>
        <hr>
        <h4>4) Testando FLEX-BASIS - Fazer diferença entre Flex-Basis:0 e Flex-Basis:Auto (isso faz com que o objeto fique do tamanho do conteúdo)</h4>
        <main class="container3">
            <div class="bloco-B1">1</div>
            <div class="bloco-B2">65465461684616546</div>
            <div class="bloco-B3">3</div>
        </main>
        <hr>
        <h4>5) Testando FLEX-BASIS - Com tamanho definido C1 = 50px, C2 = 100px e C3 = 200px</h4>
        <main class="container3">
            <div class="bloco-C1">1</div>
            <div class="bloco-C2">65465461684616546</div>
            <div class="bloco-C3">3</div>
        </main>
        <hr>
        <h4>6) Testando FLEX: 0 1 AUTO    ( POR SEQUENCIA é GROW, SHRINK e BASIS  )</h4>
        <main class="container3">
            <div class="bloco-D1">1</div>
            <div class="bloco-D2">65465461684616546</div>
            <div class="bloco-D3">3</div>
        </main>
        <hr>
        <h4>7) Testando ALIGN SELF - independente do alinhamento do CONTAINER</h4>
        <main class="container3">
            <div class="bloco-E1">1</div>
            <div class="bloco-E2">2</div>
            <div class="bloco-E3">3</div>
        </main>          
    </body>
</html>
