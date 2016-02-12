Feature: greeter
  In order to say hello to a user
  As anybody
  I need to provide a name

Scenario: Greet David
  When I provide the name David
  Then I should get Hello, David

Scenario: Greet Lacey
  When I provide the name Lacey
  Then I should get Hello, Lacey
