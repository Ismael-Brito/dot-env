# Changelog

Todas as mudanças notáveis deste projeto serão documentadas aqui.

O formato é baseado em [Keep a Changelog](https://keepachangelog.com/pt-BR/1.0.0/), e este projeto segue a [SemVer](https://semver.org/lang/pt-BR/).

## [1.0.0] - 2025-05-05

### Adicionado
- Primeira versão estável do pacote `dot-env`.
- Suporte à leitura de arquivos `.env` com pares chave-valor.
- Autoload via PSR-4.
- Classe `Environment::load()` para carregar variáveis de ambiente no `$_ENV`.
- Compatível com PHP 7.0 ou superior.

### Considerações
- Esta versão estável é adequada para uso em produção em projetos PHP.
