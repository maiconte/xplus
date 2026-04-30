# Xplus — Painel IPTV + Streaming

Sistema completo de gerenciamento IPTV com painel web, apps Android e landing page.

---

## 📦 Estrutura do Projeto

```
xplus/
├── Dockerfile              ← Servidor PHP 7.4 + ionCube (pronto para deploy)
├── railway.json            ← Configuração Railway
├── .github/workflows/      ← Deploy automático via GitHub Actions
├── landing/                ← Site principal (xplus.up.railway.app)
│   ├── index.html          ← Landing page Xplus
│   └── apps/
│       ├── NemOttCanais.apk
│       └── NemOttVod.apk
└── painelactive/           ← Painel admin PHP (ionCube)
    ├── index.php
    ├── login.php
    ├── api/
    └── ...
```

---

## 🚀 Como fazer o deploy (passo a passo)

### PASSO 1 — Criar repositório no GitHub

1. Vai em [github.com](https://github.com) e cria uma conta se não tiver
2. Clica em **New Repository**
3. Nome: `xplus`
4. Deixa como **Private** (recomendado)
5. Clica em **Create repository**

### PASSO 2 — Enviar o código para o GitHub

No seu PC, abre o terminal e roda:

```bash
cd xplus
git init
git add .
git commit -m "🚀 Xplus inicial"
git branch -M main
git remote add origin https://github.com/SEU_USUARIO/xplus.git
git push -u origin main
```

### PASSO 3 — Criar conta no Railway (grátis)

1. Vai em [railway.app](https://railway.app)
2. Clica em **Login with GitHub**
3. Autoriza o Railway

### PASSO 4 — Criar projeto no Railway

1. Clica em **New Project**
2. Seleciona **Deploy from GitHub repo**
3. Escolhe o repositório `xplus`
4. Railway detecta o Dockerfile automaticamente
5. Clica em **Deploy** ✅

### PASSO 5 — Gerar domínio público

1. No Railway, vai no seu projeto
2. Clica na aba **Settings**
3. Em **Networking** → clica em **Generate Domain**
4. Seu site estará em: `xplus-production.up.railway.app`

### PASSO 6 — Pegar o Token para deploy automático

1. No Railway, vai em **Account Settings → Tokens**
2. Clica em **New Token** → nomeia como `github-deploy`
3. Copia o token gerado

4. No GitHub, vai no repositório `xplus`
5. Clica em **Settings → Secrets → Actions**
6. Clica em **New repository secret**
7. Nome: `RAILWAY_TOKEN`
8. Valor: cole o token copiado
9. Clica em **Add secret** ✅

A partir de agora, **todo push no GitHub faz deploy automático!**

---

## 🔑 Acessar o Painel

Após o deploy, acessa:

```
https://SEU-DOMINIO.up.railway.app/painelactive/

Login: admin
Senha: admin

⚠️ MUDE A SENHA IMEDIATAMENTE após o primeiro acesso!
```

---

## 📱 Configurar os APKs

Para o app apontar para o seu painel:

1. Baixa o **APK Editor Pro** no celular
2. Abre o `NemOttCanais.apk`
3. Seleciona **Full Edit → Smali**
4. Usa **Search and Replace**:
   - Busca: `http://yourhostdns.com/painelactive/`
   - Substitui: `https://SEU-DOMINIO.up.railway.app/painelactive/`
5. Salva e instala o APK
6. Repete para o `NemOttVod.apk`

---

## ⚙️ Requisitos Técnicos

| Item | Versão |
|------|--------|
| PHP  | 7.4    |
| ionCube Loader | 7.4 |
| Apache | 2.4+ |
| SQLite | 3.x |

O Dockerfile já instala tudo automaticamente.

---

## 🆓 Limites do Railway Grátis

- 500 horas/mês de execução (suficiente para uso normal)
- 1 GB de RAM
- Domínio `.up.railway.app` grátis
- Para uso intenso, plano Hobby: $5/mês

---

## 📞 Suporte

Projeto: **Xplus**
