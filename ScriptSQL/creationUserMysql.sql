CREATE USER 'projetadmin' IDENTIFIED by 'passadmin114';
grant all privileges on ProjetNFE114.* to projetadmin@'localhost' identified by 'passadmin114';
grant all privileges on ProjetNFE114.* to projetadmin@'%' identified by 'passadmin114';