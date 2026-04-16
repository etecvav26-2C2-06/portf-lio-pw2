Data: 16/04/2026
Autor: Nícolas de Oliveira

Exercício 4 — Pergunta de reflexão
Por que sessions são geralmente preferidas para autenticação de usuários em sistemas web?

1) Segurança:

A principal vantagem é a minimização da superfície de ataque.
Dados Sensíveis no Lado do Servidor: Informações como privilégios de administrador, e-mail e ID do banco de dados nunca saem do servidor. O navegador recebe apenas um identificador (Session ID) que, por si só, não tem significado.

Controle de Revogação: Se o servidor detectar um comportamento suspeito, ele pode simplesmente invalidar a sessão no banco de dados. O usuário é desconectado instantaneamente, mesmo que ainda possua o cookie.

2) Manipulação de Dados:

Usar sessions garante a integridade da informação.
Imutabilidade pelo Usuário: Como os dados reais estão no servidor, o usuário não pode hackear sua própria sessão. Por exemplo, ele não consegue alterar um campo is_admin: false para true, pois ele não tem acesso físico a esse arquivo.
Consistência: O servidor é a fonte única da verdade. Isso evita que o estado do usuário fique dessincronizado entre diferentes abas ou dispositivos, já que todos consultam o mesmo registro centralizado.

3) Possíveis riscos ao utilizar apenas Cookies
Confiar a autenticação exclusivamente a cookies (especialmente se guardarem dados brutos) traz perigos críticos:

Exposição de Dados (XSS): Se um atacante conseguir injetar um script no site, ele pode ler o conteúdo dos cookies. Se o seu nível de acesso ou e-mail estiverem lá, o estrago é imediato.
Falsificação de Dados: Cookies são arquivos de texto no computador do cliente. Sem uma assinatura digital muito forte , um usuário mal-intencionado pode abrir o console do navegador e alterar o valor de um cookie para ganhar descontos ou acessar contas alheias.

Sequestro de Sessão: Se o cookie contiver informações demais e não for protegido (sem as flags HttpOnly e Secure), ele se torna um alvo fácil para ser copiado e replicado em outro navegador.
