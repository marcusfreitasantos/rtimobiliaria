<?php
	// Passando os dados obtidos pelo formulário para as variáveis abaixo
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$telefone = addslashes($_POST['tel']);
	$assunto = addslashes($_POST['assunto']);
	$mensagem = addslashes($_POST['mensagem']);
	$to = 'contato@rtimobi.com';// Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web

if(isset($email) && !empty($email)){

	/* Montando a mensagem a ser enviada no corpo do e-mail. */
	$body = '<html lang="pt-br">
	<body>
	  <table style="width: 100%; font-family: Open Sans, sans-serif;">
		<thead style="background: #005c9b; text-align: left;">
		  <th colspan="2" style="padding: 20px; color: white; text-shadow: 1px 1px 0 rgba(0,0,0,.2);">Contato</th>
		</thead>
		<tbody>
		  <tr style="display: block; border-bottom: 1px solid #e5e5e5;">
			<td style="padding: 10px; color: #202020; width: 100px;">
			  <b>Nome</b>
			</td>
			<td style="padding: 10px; color: #202020;">
				'. $nome .'
			</td>
		  </tr>
		  <tr style="display: block; border-bottom: 1px solid #e5e5e5;">
			<td style="padding: 10px; color: #202020; width: 100px;">
			  <b>E-mail</b>
			</td>
			<td style="padding: 10px; color: #202020;">
			'. $email .'
			</td>
		  </tr>
		  <tr style="display: block; border-bottom: 1px solid #e5e5e5;">
			<td style="padding: 10px; color: #202020; width: 100px;">
			  <b>Telefone</b>
			</td>
			<td style="padding: 10px; color: #202020;">
			'. $telefone .'
			</td>
		  </tr>
  <tr style="display: block; border-bottom: 1px solid #e5e5e5;">
			<td style="padding: 10px; color: #202020; width: 100px;">
			  <b>Assunto</b>
			</td>
			<td style="padding: 10px; color: #202020;">
			'. $assunto . '
			</td>
		  </tr>
		  <tr style="display: block; border-bottom: 1px solid #e5e5e5;">
			<td style="padding: 10px; color: #202020; width: 100px;">
			  <b>Mensagem</b>
			</td>
			<td style="padding: 10px; color: #202020;">
			'. $mensagem . '
			</td>
		  </tr>
		</tbody>
		<tfoot style="text-align: left;">
		  <th colspan="2" style="font-size: 10px; color: #005c9b; font-weight: 100; margin-top: 30px; display: block;">
				Mensagem enviado em <a href="https://rtimobi.com/" target="_blank">RT Imobiliária</a>
		  </th>
		</tfoot>
	  </table>
	</body>
  </html>';




	$header = "From: contato@rtimobi.com" . "\r\n"
				. "Reply-to:" . $email . "\r\n"
				. "X=Mailer:PHP/" . phpversion() . "\r\n"
				. "Content-type: text/html; charset=utf-8";
	
	if(mail($to, $assunto, $body, $header)){
		echo "<script>location.href='email-enviado.php'</script>";
	}else{
		echo "<script>location.href='email-naoenviado.php'</script>";
	}



	}






?>