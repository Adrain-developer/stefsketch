cd /home/u773299113/domains/mieventoapp.com/public_html
# Ejecutar el comando
bin/cake publish_scheduled_posts >> logs/publish_posts.log 2>&1

# Mantener solo las últimas 100 líneas del log
tail -n 100 logs/publish_posts.log > logs/publish_posts.log.tmp
mv logs/publish_posts.log.tmp logs/publish_posts.log

