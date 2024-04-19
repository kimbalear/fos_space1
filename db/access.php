<?php

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

        'theme/fos_space1:usedatabaseexpertmode' => array(
                'riskbitmask' => RISK_SPAM,
                'captype' => 'write',
                'contextlevel' => CONTEXT_COURSECAT,
                'archetypes' => array(
                        'manager' => CAP_ALLOW
                ),
        ),
);