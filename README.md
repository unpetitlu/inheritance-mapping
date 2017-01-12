Symfony Inheritance Mapping
========================

Création d'un petit projet afin de montrer le concept d'inheritance mapping. Création d'une entité User avec une entité Commercial héritant de celle-ci.

Documentation :

  * [**Documentation Doctrine**][1]

Explication des différents concepts
--------------

  * @ORM\InheritanceType() : SINGLE_TABLE ou JOINED. Le premier permet de conserver toutes les propriétés dans la même table.
  Le deuxième permet de créer une table différente

  * @ORM\DiscriminatorColumn() : Nom de la colonne permettant de faire la liaison

  * @ORM\DiscriminatorMap() : Défini les différentes entités

Enjoy!

[1]:  http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/inheritance-mapping.html#single-table-inheritance
