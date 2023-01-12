# Aplicação que busca alguns heróis da marvel

## 💻 Como preparar o projeto

 - Ter banco de dados MySQL Workbench instalado ou apenas o XAMPP com a simulação do MySQL.
 - Ter o XAMPP instalado para simular um ambiente de linguagem PHP.
 - O XAMPP deve ficar no C:\, caso tenha um diretório diferente, faça as devidas alterações para que o projeto funcione.
 - O projeto encontrado aqui no github, deve ser extraído e colocado dentro da pasta htdocs do XAMPP, caso não saiba o caminho (C:\xampp\htdocs).
 - No arquivo do projeto com o nome de conexao.php, as variáveis $SERVIDOR, $USER, $SENHA que estão representadas na imagem abaixo, devem ser preenchidas de acordo com os dados do seu localhost.<br>
 ![image](https://user-images.githubusercontent.com/121051093/211684054-f830f752-c714-485a-b55b-3b14f2ff1441.png)
 - Vá na pasta do xampp e procure por um ícone escrito: XAMPP CONTROL e clique nele para abrir. <br>
![image](https://user-images.githubusercontent.com/121051093/211684347-2f0d5282-b120-404b-b5ae-3dbb1a3d2967.png)
![image](https://user-images.githubusercontent.com/121051093/211684369-91403a6e-30d5-4317-8586-2b87472c102d.png)
- Após o controller do xampp abrir, clique em START nos campos do apache e do mysql e verifique se ele vai ficar verde igual o exemplo abaixo. <br>
![image](https://user-images.githubusercontent.com/121051093/211684563-d41f5b48-9161-4181-bdd5-05e5f44ee857.png)
- Após isso, acesse agora a URL do seu localhost, caso tenha instalado o xampp no diretório C:\ como falei, basta copiar e colar esse link no seu navegador (http://localhost/api-marvel/view/index.php).<br><br>

## CASO NÃO SAIBA QUAL A SUA SENHA DO XAMPP/MYSQL E QUAL SEU USER, SIGA O PASSO A PASSO: <br>
- Abra o controler do xampp e clique no icone de pasta que está escrito EXPLORER, como o exemplo abaixo. <br>
![image](https://user-images.githubusercontent.com/121051093/211686484-3b97d16b-fddd-42ff-b74e-330e292fd604.png)
- Ele vai abrir a pasta do xampp, procure dentro dela a pasta com o nome de phyMyAdmin, abra ela e procure pelo arquivo: config.inc <br>
![image](https://user-images.githubusercontent.com/121051093/211686623-ef75ff75-6488-45c1-a720-f5624c2dc948.png)
- Execute o arquivo config.inc e procure por essa frase em específico: $cfg['Servers'][$i]['password'] = ''; e dentro das ASPAS você vai definir sua senha e procure também por: $cfg['Servers'][$i]['user'] = 'root'; e no lugar da palavra root mantendo as aspas, escreva um nome para ser seu usuario e depois é só salvar o arquivo.<br><br><br>
## 💻 Como executar a aplicação
- Acesse no navegador o seu localhost como ensinei: (http://localhost/api-marvel/view/index.php), caso você não está usando a mesma camada de diretório, lembre-se de entrar no arquivo SCRIPT.JS e trocar o campo URL, colocando a URL correta de acordo com o caminho da pasta que contem o arquivo action.php (conforme a imagem abaixo)
![image](https://user-images.githubusercontent.com/121051093/211956844-e1fa6682-682d-4515-99e4-bd73b7122f51.png)
- Selecione um herói na lista
- Depois que ler o nome e a descrição do herói, basta clicar em CONHECER HISTÓRIAS
- Vai te encaminhar para a tela onde tem todas as histórias daquele herói.

## 🔧Tecnologias utilizadas
- PHP
- JQuery/JS/Ajax
- Bootstrap
- CSS
- API MARVEL (https://developer.marvel.com/docs#!/public/getCreatorCollection_get_0), as usadas foram: /v1/público/caracteres e v1/public/characters/characterID/stories.
- Banco de Dados MySQL (XAMPP)
- Git para versionamento de código

## Futuras melhorias
- Consumir a API e buscar os dados pelo nome digitado, para que encontrem qualquer herói.
- Trazer quadrinhos e séries dos heróis
- Melhorar o design
- Melhorar acessibilidade

## 📝Desenvolvedor
Meu nome é Izadora Toledo, e foi um prazer para mim construir esta aplicação. 
 


