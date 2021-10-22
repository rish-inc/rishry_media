#!/bin/bash
# srcファイルをrsync over SSHで転送
rsync -acvz --delete / yat8823jp@153.126.179.195:project/
# サービスを再起動
ssh test@your.ip.address "cd project/; docker-compose build; docker-compose down; docker-compose -f docker-compose.yml -f docker-compose-prod.yml up -d"