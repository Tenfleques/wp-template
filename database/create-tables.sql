CREATE USER 'tendai_wp'@'localhost' IDENTIFIED BY '%A9]+pL7hf4^ghfs476%%*';
CREATE USER 'tendai_wp'@'%' IDENTIFIED BY '%A9]+pL7hf4^ghfs476%%*';

CREATE DATABASE IF NOT EXISTS tendai_wp;
use tendai_task;

GRANT INSERT,SELECT,UPDATE,CREATE,DELETE ON tendai_wp* TO `tendai_tasker`@`localhost`;
GRANT INSERT,SELECT,UPDATE,CREATE,DELETE ON tendai_wp.* TO `tendai_tasker`@`%`;
