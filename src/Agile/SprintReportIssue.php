<?php

namespace JBuncle\JiraClient\Agile;

/**
 * SprintReportIssue.
 */
class SprintReportIssue {

    private array $json;

    public function __construct(array $json) {
        $this->json = $json;
    }

    public function getId() {
        return $this->json['id'];
    }

    public function getKey() {
        return $this->json['key'];
    }

}
