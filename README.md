# 🌍 Countries & Capitals Quiz

Um quiz interativo de países e capitais desenvolvido em Laravel que testa seus conhecimentos de geografia mundial.

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📋 Sobre o Projeto

O Countries & Capitals Quiz é uma aplicação web educativa que permite aos usuários testarem seus conhecimentos sobre as capitais dos países do mundo. O sistema oferece uma experiência gamificada com pontuação e resultados detalhados.

### ✨ Funcionalidades

- 🎮 **Quiz Interativo**: Perguntas dinâmicas sobre países e suas capitais
- ⚙️ **Configuração Personalizada**: Escolha de 3 a 30 questões por quiz
- 🔀 **Questões Aleatórias**: Perguntas e alternativas embaralhadas a cada jogo
- 📊 **Sistema de Pontuação**: Acompanhamento de acertos e erros em tempo real
- 🎯 **Resultados Detalhados**: Porcentagem final e estatísticas completas
- 🔐 **Respostas Criptografadas**: Segurança nas respostas para evitar manipulação
- 📱 **Design Responsivo**: Interface adaptável para diferentes dispositivos

### 🗺️ Base de Dados

O quiz inclui informações de **todos os países do mundo** com suas respectivas capitais, totalizando mais de 190 países.

## 🚀 Tecnologias Utilizadas

- **Backend**: Laravel 10.x
- **Frontend**: Blade Templates + Bootstrap 5
- **Linguagem**: PHP 8.1+
- **Sessões**: Sistema de sessões do Laravel para persistência de dados
- **Criptografia**: Laravel Crypt para segurança das respostas

## 📁 Estrutura do Projeto

```
app/
├── Http/Controllers/
│   └── MainController.php       # Controller principal do quiz
├── View/Components/             # Componentes Blade reutilizáveis
│   ├── Answer.php              # Componente de resposta
│   └── Question.php            # Componente de pergunta
└── app_data.php                # Base de dados dos países

resources/views/
├── components/                  # Templates dos componentes
│   ├── answer.blade.php        # Template da resposta
│   ├── question.blade.php      # Template da pergunta
│   └── main-layout.blade.php   # Layout principal
├── home.blade.php              # Página inicial
├── game.blade.php              # Página do jogo
├── answer_result.blade.php     # Resultado de cada resposta
└── final_results.blade.php     # Resultados finais
```

## 🎮 Como Funciona

1. **Início**: O usuário escolhe quantas perguntas quer responder (3-30)
2. **Preparação**: O sistema seleciona países aleatórios e gera 4 alternativas para cada
3. **Jogo**: Para cada país apresentado, o usuário escolhe a capital correta
4. **Feedback**: Após cada resposta, mostra se acertou ou errou
5. **Resultado**: Ao final, apresenta estatísticas completas e porcentagem de acertos

## 🛠️ Instalação

### Pré-requisitos

- PHP 8.1 ou superior
- Composer
- Node.js e NPM (para assets)

### Passos para Instalação

1. **Clone o repositório**
```bash
git clone https://github.com/thak1996/quiz.git
cd quiz
```

2. **Instale as dependências do PHP**
```bash
composer install
```

3. **Configure o ambiente**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Instale as dependências do Node.js**
```bash
npm install
npm run build
```

5. **Inicie o servidor**
```bash
php artisan serve
```

6. **Acesse a aplicação**
```
http://localhost:8000
```

## 🎯 Rotas Principais

| Rota | Método | Descrição |
|------|--------|-----------|
| `/` | GET | Página inicial do quiz |
| `/` | POST | Preparação do jogo |
| `/game` | GET | Página do jogo |
| `/answer/{answer}` | GET | Processamento da resposta |
| `/next_question` | GET | Próxima questão |
| `/show_results` | GET | Resultados finais |

## 🔧 Componentes Principais

### MainController
- `startGame()`: Exibe a página inicial
- `prepareGame()`: Configura o quiz com validação
- `game()`: Gerencia a exibição das perguntas
- `answer()`: Processa as respostas
- `showResults()`: Calcula e exibe resultados

### Componentes Blade
- **Answer**: Renderiza as opções de resposta
- **Question**: Exibe a pergunta atual e progresso
- **Main-Layout**: Layout base da aplicação

## 📊 Sistema de Pontuação

- **Acertos**: Incrementados a cada resposta correta
- **Erros**: Calculados automaticamente (total - acertos)
- **Porcentagem**: (acertos ÷ total) × 100
- **Cores**: Verde para ≥50%, vermelho para <50%

## 🔒 Segurança

- Respostas criptografadas para evitar manipulação via URL
- Validação de entrada para número de questões
- Proteção CSRF em formulários
- Sessões seguras para persistência de dados

## 🤝 Contribuição

Contribuições são bem-vindas! Para contribuir:

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 👨‍💻 Autor

**Franklyn Viana** - [thak1996](https://github.com/thak1996)

---

⭐ Se este projeto te ajudou, considere dar uma estrela no GitHub!
