#!/bin/bash
# ============================================================
# Xplus — Script de Setup Automático
# Roda esse script no seu PC com Linux para subir tudo no GitHub
# ============================================================

set -e

RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
BOLD='\033[1m'
NC='\033[0m'

echo ""
echo -e "${RED}${BOLD}"
echo "  ██╗  ██╗██████╗ ██╗     ██╗   ██╗███████╗"
echo "  ╚██╗██╔╝██╔══██╗██║     ██║   ██║██╔════╝"
echo "   ╚███╔╝ ██████╔╝██║     ██║   ██║███████╗"
echo "   ██╔██╗ ██╔═══╝ ██║     ██║   ██║╚════██║"
echo "  ██╔╝ ██╗██║     ███████╗╚██████╔╝███████║"
echo "  ╚═╝  ╚═╝╚═╝     ╚══════╝ ╚═════╝ ╚══════╝"
echo -e "${NC}"
echo -e "${BOLD}  Setup Automático — Projeto Xplus${NC}"
echo ""

# ─── Verifica dependências ───────────────────────────────────
check_dep() {
  if ! command -v "$1" &>/dev/null; then
    echo -e "${YELLOW}⚠ Instalando $1...${NC}"
    sudo apt-get install -y "$1" -qq
  fi
}

echo -e "${BLUE}[1/6]${NC} Verificando dependências..."
check_dep git
check_dep curl

# ─── Coleta informações ──────────────────────────────────────
echo ""
echo -e "${BLUE}[2/6]${NC} Configuração do GitHub"
echo ""
read -p "  Seu usuário do GitHub: " GH_USER
read -p "  Nome do repositório [xplus]: " GH_REPO
GH_REPO=${GH_REPO:-xplus}

echo ""
echo -e "${BLUE}[3/6]${NC} Configurando Git..."
git config --global user.name "$GH_USER" 2>/dev/null || true
git -C . init 2>/dev/null || true

# ─── Inicializa repositório ──────────────────────────────────
echo ""
echo -e "${BLUE}[4/6]${NC} Preparando repositório local..."

if [ ! -f .git/config ]; then
  git init
fi

git add -A
git commit -m "🚀 Xplus — deploy inicial" --allow-empty
git branch -M main

# ─── Configura remote ────────────────────────────────────────
REMOTE_URL="https://github.com/$GH_USER/$GH_REPO.git"
git remote remove origin 2>/dev/null || true
git remote add origin "$REMOTE_URL"

# ─── Push ────────────────────────────────────────────────────
echo ""
echo -e "${BLUE}[5/6]${NC} Enviando para GitHub..."
echo -e "${YELLOW}  (pode pedir sua senha ou token do GitHub)${NC}"
echo ""

git push -u origin main

# ─── Instruções finais ────────────────────────────────────────
echo ""
echo -e "${GREEN}${BOLD}✅ Código enviado para o GitHub com sucesso!${NC}"
echo ""
echo -e "${BLUE}[6/6]${NC} Próximos passos para ativar o servidor:"
echo ""
echo -e "  ${BOLD}1. Acessa:${NC} https://railway.app"
echo -e "  ${BOLD}2. Login com GitHub${NC}"
echo -e "  ${BOLD}3. New Project → Deploy from GitHub → $GH_REPO${NC}"
echo -e "  ${BOLD}4. Settings → Networking → Generate Domain${NC}"
echo ""
echo -e "  ${BOLD}Painel vai estar em:${NC}"
echo -e "  ${RED}https://xplus-production.up.railway.app/painelactive/${NC}"
echo ""
echo -e "  ${BOLD}Login padrão:${NC} admin / admin"
echo -e "  ${RED}⚠ TROQUE A SENHA IMEDIATAMENTE!${NC}"
echo ""
echo -e "${GREEN}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo -e "  Projeto Xplus — Deploy Concluído 🚀"
echo -e "${GREEN}━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━${NC}"
echo ""
