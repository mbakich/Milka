[supervisord]
nodaemon=true
user=root
logfile=/dev/stdout
logfile_maxbytes=0

[program:laravel-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/html/artisan queue:work --memory=%%MEMORY_LIMIT%% --sleep 2 --quiet --no-interaction
stdout_logfile=/dev/stdout
stdout_logfile_maxbytes=0
autostart=true
autorestart=true
#numprocs=8
numprocs=2
startretries=10
stdout_events_enabled=1
redirect_stderr=true
stopwaitsecs=30

[eventlistener:supervisord-watchdog]
command=/usr/bin/python3 /opt/supervisord-watchdog.py || /usr/bin/python /opt/supervisord-watchdog.py
events=PROCESS_STATE_FATAL
