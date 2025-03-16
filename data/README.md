# Avalanche Data
The data for official Avalanche levels and profiles on Geometry Dash. Developers may use the API in the AvalancheIndex mod to easily access data from here.

## Profiles
Geometry Dash accounts that are proven to belong to an Avalanche member.

#### Badges
- **Director**: Leads the whole team
- **Manager**: Helps keep things in check
- **Member**: Participates in projects
- **Collaborator**: Non-members of the team who also worked on a project
- **Cubic Studios**: Staff of Cubic Studios

#### Data
| Field             | Description                                       | Type              | Defaults                                                                      |
|:-----------------:|---------------------------------------------------|:-----------------:|-------------------------------------------------------------------------------|
| **`name`**        | Official pseudonym of the member.                 | string            | *`any`*                                                                       |
| **`badge`**       | ID of the member's badge.                         | string            | `cubic-studios`, `director`, `team-manager`, `team-member`, `collaborator`    |

## Levels
Projects that Avalanche worked on.

#### Project Type
- **Team Project**: A project that members of the team worked on
- **Collaboration**: A project that involves the work of Collaborators
- **Event Entry**: A project that Avalanche made as an entry to another event
- **Avalanche Event**: A project that resulted from an open or closed event hosted by Avalanche

#### Data
| Field             | Description                                       | Type              | Defaults                                                                      |
|:-----------------:|---------------------------------------------------|:-----------------:|-------------------------------------------------------------------------------|
| **`name`**        | Official name of the level.                       | string            | *`any`*                                                                       |
| **`showcase`**    | Video URL of the full showcase of the level.      | string            | *`any`*                                                                       |
| **`type`**        | Type of project the level is featured as.         | string            | `team`, `collab`, `entry`, `event`                                            |
| **`fame`**        | If the level will be highlighted on lists.        | boolean           | `false `                                                                      |