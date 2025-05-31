# Avalanche Data
The data for official Avalanche levels and profiles on Geometry Dash - intended for Cubic staff and Avalanche members. Developers may use the API in the [AvalancheIndex mod](https://www.github.com/CubicCommunity/AvalancheIndex/) to more easily access data stored here.

## Profiles
Geometry Dash accounts that are proven to belong to an Avalanche member.

#### Badges
- **Director**: Leads the whole team
- **Manager**: Helps keep things in check
- **Member**: Participates in projects
- **Collaborator**: Non-members of the team who also worked on a project
- **Cubic Studios**: Staff of Cubic Studios

#### Data
|    Field    | Description                       |  Type  | Defaults                                                                   |
| :---------: | --------------------------------- | :----: | -------------------------------------------------------------------------- |
| **`name`**  | Official pseudonym of the member. | string | *`any`*                                                                    |
| **`badge`** | ID of the member's badge.         | string | `cubic-studios`, `director`, `team-manager`, `team-member`, `collaborator` |

## Levels
Projects that Avalanche worked on.

#### Project Type
- **Solo Level**: A project that a member worked on by themself
- **Team Project**: A project that members of the team worked on
- **Collaboration**: A project that involves the work of Collaborators
- **Avalanche Event**: A project that resulted from a public or private event hosted by Avalanche

#### Data
|     Field      | Description                                          |  Type   | Defaults                          |
| :------------: | ---------------------------------------------------- | :-----: | --------------------------------- |
|   **`name`**   | Official name of the level.                          | string  | *`any`*                           |
|   **`host`**   | Name of the host of the level.                       | string  | *`any`*                           |
| **`showcase`** | YouTube video URL of the full showcase of the level. | string  | *`any`*                           |
|   **`type`**   | Type of project the level is featured as.            | string  | `solo`, `team`, `collab`, `event` |
|   **`fame`**   | If the level will be highlighted on lists.           | boolean | `false`                           |