<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'remg_generator.association_helper' shared service.

return $this->services['remg_generator.association_helper'] = new \Remg\GeneratorBundle\Command\Helper\AssociationHelper(${($_ = isset($this->services['remg_generator.mapping_validator']) ? $this->services['remg_generator.mapping_validator'] : $this->load('getRemgGenerator_MappingValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['remg_generator.mapping_guesser']) ? $this->services['remg_generator.mapping_guesser'] : $this->services['remg_generator.mapping_guesser'] = new \Remg\GeneratorBundle\Mapping\MappingGuesser()) && false ?: '_'});
