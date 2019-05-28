# Assinador
assina com certificado digital um arquivo pdf

# Especificações

Essa classe estende o 'Zend_Pdf' do ZendFramework para fornecer esse recurso.

O script test_certificate.php mostra como usar a classe.

**Limitações:**
1. Atualmente, o único tipo de certificado suportado está no formato PKCS12.
   Você pode obter um certificado de amostra em http://www.cacert.org
   e, em seguida, faça o backup, indo para as configurações do seu navegador (presumivelmente, o Firefox).
   Enquanto o backup, o seu navegador irá pedir a senha.
   
2. Documentos com elementos existentes do AcroForm não são suportados (documentos já certificados,
   documentos com formulários e JavaScript). Esses elementos não são suportados pelo Zend_Pdf.
   
3. A maioria dos certificados digitais é reconhecida pelo Adobe Reader como 'desconhecida' e um usuário que
   abre deve adicionar o certificado em confiável.
   O melhor certificado seria aquele que tem o Adobe CA como autoridade de certificação raiz,
   então seria aberto como confiável para todos os usuários. No entanto, todos esses certificados usam
   um dispositivo USB para armazenar as informações do certificado e elas são caras.

   Autor do projeto [Damir](http://program.farit.ru/)