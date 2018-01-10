# Verif-email 🕶

É uma aplicação mais pessoal mesmo, usado funções nativas do PHP desde a versão 4 é compatível com essa poderosa ferramenta.

## 🎈 Cuidado

É aconselhado usa-la absolutamente em tudo, uma vez que alguém pode dar uma injeção em seu formulário

## 💉 Como funciona a injeção? 

Funciona por entrada como se fosse um texto comum e sem pretensões, porém malicioso.
Eis dois exemplos:

```html
  <input type="email" name="email" placeholder="Digite seu email"/>
```
Este código acima segue o padrão `HTML5`, e dar uma quantidade pequena de segurança, uma vez que o `type` está configurado `email` segundo o [padrão](https://www.w3schools.com/html/html_form_input_types.asp).
