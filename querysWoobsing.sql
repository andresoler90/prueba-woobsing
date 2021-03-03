SELECT 
  usuarios.*
FROM
  usuarios 
  JOIN roles 
    ON roles.id = usuarios.role_id 
WHERE usuarios.role_id IN (1, 2);

SELECT 
  permisos.* 
FROM
  usuarios 
  JOIN roles 
    ON roles.id = usuarios.role_id 
  JOIN users_relations 
    ON users_relations.usuario_id = usuarios.id 
  JOIN `permisos` 
    ON `permisos`.`id` = users_relations.permiso_id 
WHERE usuarios.role_id = 1;


SELECT 
  usuarios.*,
  roles.nombre
FROM
  usuarios 
  JOIN roles 
    ON roles.id = usuarios.role_id 
  JOIN users_relations 
    ON users_relations.usuario_id = usuarios.id 
  JOIN `permisos` 
    ON `permisos`.`id` = users_relations.permiso_id 
WHERE users_relations.permiso_id = 2;