
    



        /* Variaveis de Comparação de Dialogo*/
        Conversa_login = "0"; /* check */
        Conversa_cadastro = "0"; /* fazendo */
        Conversa_matricula = "0";
        Conversa_cursos = "0"; /* check */
        Conversa_pagamento = "0"; 
        Conversa_avaliacao = "0";
        Conversa_conversa = "0";
        dialogos = 0;
        /* Variaveis de Comparação de Dialogo*/
        var z = 0;
        function concluido(){

           h = todas();
            if(h >= 10){
                
                return true;
            } else {
               
                alert('Você deve responder TODAS perguntas para clicar em finalizar!');
                return false;
            }
        }

        function teste(){
            var j = contar()-1;
            
            if(j>7){
            var y;
                 y = "Intervenção";
             } else if (j>4){
                 y = "Preocupável";
             } else {
                 y = "Saudável";
             } 
 
             document.getElementById("nota").value=y;
 
         }

         function todas(){
            z++;

            return z;
         }
         
        var x = 0;
        function contar(){
            x++;
            
            
            return x;
         

        }



        

            
        


    function getBotResponse(input) {

         /* Projeto Cloteus */


       
     
         finalizar =
         /*Fala 0*/ ["Não é certo finalizar sem terminar a<strong> conversa</strong> 💔 <br><br> Caso insista, clique em <strong> Voltar </strong> para voltar para a página anterior."];
 
 
 
 
         erro =
         /*Fala 0*/ ["<strong> Opa  </strong> 💔 ",
         /*Fala 1*/ "<br> <br> O que você digitou não está entre as respostas <strong>Sim, Não ou Talvez </strong><br>Ou... você digitou de maneira errada ou diferente da esperada! <strong> Tente outra vez </strong>"];
 
     
 
         InfoConversa = 
         /*Fala 0*/ ["Sente que recentemente está sofrendo com preocupações em excesso? <br> <br> Digite apenas <strong> Sim, Não ou Talvez!</strong>",
                     "Anda tendo problemas com o apetite desregulado? Ex.: Não ter vontade de comer no horário de almoço ou de janta <br> <br> Digite apenas <strong> Sim, Não ou Talvez!</strong>",
                     "Está tendo problemas de insônia e alterações do sono? <br> <br> Digite apenas <strong> Sim, Não ou Talvez!</strong>",
                     "Você vem tendo problemas de humor repentinas? <br> <br> Digite apenas <strong> Sim, Não ou Talvez!</strong>",
                     "Anda tendo medo constante e enxergando perigo em tudo ou quase tudo? <br> <br> Digite apenas <strong> Sim, Não ou Talvez!</strong>",
                     "Tem falta de ar e dificuldade para respirar de vez em quando? <br> <br> Digite apenas <strong> Sim, Não ou Talvez!</strong>",
                     "Tem pensamentos que ficam durando na sua cabeça por longos perigos? <br> <br> Digite apenas <strong> Sim, Não ou Talvez!</strong>",
                     "Anda tendo muitos problemas com enxaquecas ou enjoo e vômitos? <br> <br> Digite apenas <strong> Sim, Não ou Talvez!</strong>",
                     "Mãos frias e suadas, suor excessivo, boca seca e ondas de calor são exemplos de sintomas de ansiedade. Anda tendo algum destes? <br> <br> Digite apenas <strong> Sim, Não ou Talvez!</strong>",
                     "Por fim, você rói as unhas ou tem agitação de pernas e braços? <br> <br> Digite apenas <strong> Sim, Não ou Talvez!</strong>",
                     "Chegamos ao fim do questionário! <br><br> Para finalizar-lo clique sobre o botão <strong>Finalizar </strong> no topo da tela para terminarmos com êxito! Foi um prazer 😊 "
                 ];
 
    
     
 
         /*----------------------> Arrays de dialogo <----------------------*/
 
 
         RespostaUsuario = input.toLowerCase();
        
         
         if(Conversa_avaliacao == "0" && Conversa_login == "0" &&  Conversa_conversa == "0" &&  Conversa_matricula == "0" &&  Conversa_cursos == "0" &&  Conversa_pagamento == "0" &&  Conversa_avaliacao == "0" ){
             dialogos = 0;
         } else{
             dialogos = 1;
         }
 
        
      if (dialogos == 0 && (RespostaUsuario.includes("cancelar")||RespostaUsuario.includes("sair")||RespostaUsuario.includes("fechar")) ){
             return finalizar[0];
         
         
         
 
 
 
 
      
 
 
         
         /* <----------------------------------------------------------------------------- Ifs do ChatBot ----------------------------------------------------------------------------->*/
         
   
 
         
          } else if (dialogos == 0 && (RespostaUsuario.includes("Começar teste")||RespostaUsuario.includes("começar teste")||RespostaUsuario.includes("comecar teste"))||RespostaUsuario.includes("Comecar teste") ){
             Conversa_conversa = "pesquisa_iniciada";    
             
        
             return InfoConversa[0]; 
              
           
          } else if (dialogos == 1 && Conversa_conversa == "pesquisa_iniciada" && (RespostaUsuario.includes("sim")||RespostaUsuario.includes("Sim")||RespostaUsuario.includes("Talvez")||RespostaUsuario.includes("talvez"))){
                 
            contar();
            todas();
           
                 Conversa_conversa = "pesquisa_1";
                 return InfoConversa[1]; 
 
              } else if (dialogos == 1 && Conversa_conversa == "pesquisa_iniciada" && (RespostaUsuario.includes("não")||RespostaUsuario.includes("nao")||RespostaUsuario.includes("Nao")||RespostaUsuario.includes("Não"))){
 
                 Conversa_conversa = "pesquisa_1";
                 todas();
                
                 return InfoConversa[1];
              } else if (dialogos == 1 && Conversa_conversa == "pesquisa_1" && (RespostaUsuario.includes("sim")||RespostaUsuario.includes("Sim")||RespostaUsuario.includes("Talvez")||RespostaUsuario.includes("talvez"))){
                 contar();
                 todas();
                 Conversa_conversa = "pesquisa_2";
                 return InfoConversa[2]; 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_1" && (RespostaUsuario.includes("não")||RespostaUsuario.includes("nao")||RespostaUsuario.includes("Nao")||RespostaUsuario.includes("Não"))){
 
                 Conversa_conversa = "pesquisa_2";
                 todas();
                 return InfoConversa[2];
 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_2" && (RespostaUsuario.includes("sim")||RespostaUsuario.includes("Sim")||RespostaUsuario.includes("Talvez")||RespostaUsuario.includes("talvez"))){
                 contar();
                 Conversa_conversa = "pesquisa_3";
                 todas();
                 return InfoConversa[3]; 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_2" && (RespostaUsuario.includes("não")||RespostaUsuario.includes("nao")||RespostaUsuario.includes("Nao")||RespostaUsuario.includes("Não"))){
 
                 Conversa_conversa = "pesquisa_3";
                 todas();
                 return InfoConversa[3];
 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_3" && (RespostaUsuario.includes("sim")||RespostaUsuario.includes("Sim")||RespostaUsuario.includes("Talvez")||RespostaUsuario.includes("talvez"))){
                 contar();
                 Conversa_conversa = "pesquisa_4";
                 todas();
                 return InfoConversa[4]; 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_3" && (RespostaUsuario.includes("não")||RespostaUsuario.includes("nao")||RespostaUsuario.includes("Nao")||RespostaUsuario.includes("Não"))){
 
                 Conversa_conversa = "pesquisa_4";
                 todas();
                 return InfoConversa[4];
 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_4" && (RespostaUsuario.includes("sim")||RespostaUsuario.includes("Sim")||RespostaUsuario.includes("Talvez")||RespostaUsuario.includes("talvez"))){
                 contar();
                 Conversa_conversa = "pesquisa_5";
                 todas();
                 return InfoConversa[5]; 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_4" && (RespostaUsuario.includes("não")||RespostaUsuario.includes("nao")||RespostaUsuario.includes("Nao")||RespostaUsuario.includes("Não"))){
 
                 Conversa_conversa = "pesquisa_5";
                 todas();
                 return InfoConversa[5];
 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_5" && (RespostaUsuario.includes("sim")||RespostaUsuario.includes("Sim")||RespostaUsuario.includes("Talvez")||RespostaUsuario.includes("talvez"))){
                 contar();
                 Conversa_conversa = "pesquisa_6";
                 todas();
                 return InfoConversa[6]; 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_5" && (RespostaUsuario.includes("não")||RespostaUsuario.includes("nao")||RespostaUsuario.includes("Nao")||RespostaUsuario.includes("Não"))){
                todas();
                 Conversa_conversa = "pesquisa_6";
                 return InfoConversa[6];
 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_6" && (RespostaUsuario.includes("sim")||RespostaUsuario.includes("Sim")||RespostaUsuario.includes("Talvez")||RespostaUsuario.includes("talvez"))){
                 contar();
                 todas();
                 Conversa_conversa = "pesquisa_7";
                 return InfoConversa[7]; 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_6" && (RespostaUsuario.includes("não")||RespostaUsuario.includes("nao")||RespostaUsuario.includes("Nao")||RespostaUsuario.includes("Não"))){
                todas();
                 Conversa_conversa = "pesquisa_7";
                 return InfoConversa[7];
 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_7" && (RespostaUsuario.includes("sim")||RespostaUsuario.includes("Sim")||RespostaUsuario.includes("Talvez")||RespostaUsuario.includes("talvez"))){
                 contar();
                 todas();
                 Conversa_conversa = "pesquisa_8";
                 return InfoConversa[8]; 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_7" && (RespostaUsuario.includes("não")||RespostaUsuario.includes("nao")||RespostaUsuario.includes("Nao")||RespostaUsuario.includes("Não"))){
                todas();
                 Conversa_conversa = "pesquisa_8";
                 return InfoConversa[8];
 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_8" && (RespostaUsuario.includes("sim")||RespostaUsuario.includes("Sim")||RespostaUsuario.includes("Talvez")||RespostaUsuario.includes("talvez"))){
                 contar();
                 todas();
                 Conversa_conversa = "pesquisa_9";
                 return InfoConversa[9]; 
             } else if(dialogos == 1 && Conversa_conversa == "pesquisa_8" && (RespostaUsuario.includes("não")||RespostaUsuario.includes("nao")||RespostaUsuario.includes("Nao")||RespostaUsuario.includes("Não"))){
                todas();
                 Conversa_conversa = "pesquisa_9";
                 return InfoConversa[9];
                 
             } else if (dialogos == 1 && Conversa_conversa == "pesquisa_9" && (RespostaUsuario.includes("sim")||RespostaUsuario.includes("Sim")||RespostaUsuario.includes("Talvez")||RespostaUsuario.includes("talvez"))){
                 contar();
                 todas();
                 Conversa_conversa = "final";
                 return InfoConversa[10];
              } else if (dialogos == 1 && Conversa_conversa == "pesquisa_9" && (RespostaUsuario.includes("não")||RespostaUsuario.includes("nao")||RespostaUsuario.includes("Nao")||RespostaUsuario.includes("Não"))){                
                todas();
                 Conversa_conversa = "final";
                 return InfoConversa[10];
       }else{
                 return erro[0] + erro[1];
             }
     
         
         }
     
     
 