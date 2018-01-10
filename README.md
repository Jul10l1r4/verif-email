# Verif-email 🕶

> Feito em PHP 🐘

É uma aplicação mais pessoal mesmo, usado funções nativas do PHP desde a versão 4 é compatível com essa poderosa ferramenta.

## 🎈 Cuidado

É aconselhado usa-la absolutamente em tudo, uma vez que alguém pode dar uma injeção em seu formulário

## 💉 Como funciona a injeção? 

Funciona por entrada como se fosse um texto comum e sem pretensões, porém malicioso.
Eis dois exemplos:

```html
  <input type="email" name="email" placeholder="Digite seu email"/>
```

Este código acima segue o padrão `HTML5`, e dar uma quantidade pequena de segurança, uma vez que o `type` está configurado `email` segundo o [padrão](https://www.w3schools.com/html/html_form_input_types.asp) já para que evitem ataques.

E no código de recebimento temos o seguinte código em PHP:

```php
  $email = POST[ 'email' ];
  email("EmailDoDonoDoSite@dominio.com", "Assunto que já foi recebido", $email);
```
Agora vejamos o que alguém mal intencionado poderia fazer em quatro passos:

1. Apertar na tecla `F12`

2. Selecionar a tag `input` de `type='email'`

3. Mudar o nome `email` do type por `text`

4. Escrever algo como:

```php
  Já era\nbcc emailparaenviar@hehe.com&replyTo = ... 
```
