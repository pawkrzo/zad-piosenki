Feature: Web pages

  Scenario: piosenka-powiedz
    Given I am on homepage
    When I follow "Powiedz"
    Then I should see "Powiedz, powiedz czemu"