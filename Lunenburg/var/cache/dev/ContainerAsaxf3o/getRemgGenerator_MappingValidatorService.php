<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'remg_generator.mapping_validator' shared service.

return $this->services['remg_generator.mapping_validator'] = new \Remg\GeneratorBundle\Mapping\MappingValidator(${($_ = isset($this->services['remg_generator.entity_factory']) ? $this->services['remg_generator.entity_factory'] : $this->load('getRemgGenerator_EntityFactoryService.php')) && false ?: '_'});
