#!/bin/bash
rsync -rRq --exclude sync.sh --exclude Dockerfile --exclude .git --exclude README.md --exclude LICENSE  --exclude .gitignore --exclude docker-compose.yaml ./ tendai@flequesboard.com:~/ifmarket.ilearnfb.com/
