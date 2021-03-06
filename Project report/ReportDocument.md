#MatchMaker Application – A Recommender System to Match Collaborative Software Tools to Computer Supported Collaborative Work 

##### *ABSTRACT* 
Computer Supported Collaborative Work (CSCW) is increasingly becoming a significant component of living and working in modern times. Computer mediated collaborations occur in all aspects of our personal and professional lives. Furthermore, the technologies which can be used to facilitate CSCW are diverse and ever changing. Due to the breadth of options, it is a challenge for individuals selecting appropriate tools to support collaborative work. As specific tools are often designed to support specific types of collaborative work we believe that a system for helping people match tools to types of work is needed. The Model of Coordinated Action (MoCA) framework provides a descriptive lens for describing the complex nature of collaborative work. Our project explores whether having individuals articulate the type of work to be facilitated using the dimensions of the MoCA framework can help them identify appropriate technologies for facilitating that work through an online recommender system. The recommender system will be tested to determine whether the MoCA framework can be mapped to collaborative software tools thereby aiding the decision making process for individuals engaging in CSCW.   
 
**Author Keywords**: Collaborative work; Model of Coordinated Action, MoCA Framework CSCW; Software affordances 
 
**ACM Classification Keywords**: Design, Experimentation, Theory 
 
## INTRODUCTION 
The study of CSCW is concerned with supporting and investigating how individuals work collaboratively when mediated by computer systems and software. CSCW researchers seek to understand, so as to better support, collaborative work (Bannon & Schmidt, 1989). Successful CSCW is dependent on the team involved in the work, an understanding of the work to be done, and the tools selected to help mediate communication and support productivity. CSCW is a collaborative social activity which requires an understanding of the context and culture in which the work occurs.

The appropriate selection of technologies which meet the needs of a specific group can have a great impact on the success of the collaboration (Olsen & Olsen, 2014). Poorly selected software tools which do not meet the needs of the team can lead to communication breakdowns, data loss, or poor productivity. Technologies are often selected based on past experiences or general accessibility. These alone are not likely to contribute to the selection of tools which consistently match the emerging needs of CSCW projects. The selection of tools to support CSCW may occur without much consideration, and this presents a risk to success. By having users articulate the nature of the collaborative work to be undertaken, we believe a more thoughtful selection of appropriate tools may occur. 

Complicating this further is the wide array of collaborative technologies now available via the Internet. Many collaborative technologies provide inherent affordances which facilitate types of collaborative activity. The challenge for users engaging in collaborative work, is matching the appropriate technology to their specific needs. It is our opinion that for any person or group planning a CSCW project, the vast availability of potential tools is overwhelming and a challenge to navigate.  

We believe that if users take the time to reflect upon and describe the type of collaborative work they seek to conduct, this information can be used to suggest appropriate collaborative tools. The recently proposed MoCA framework (Lee & Paine, 2015) provides a useful lens for describing collaborative work. We also believe that articulating CSCW via the MoCA framework is a useful step for individuals planning CSCW as it surfaces the complex social and organizational issues inherent in collaborative work. Reflection upon and articulation of the work at hand allows individuals to identify the various resources needed to accomplish successful CSCW (Lee & Paine, 2015). 

Our intent is to test and extend the MoCA framework as part of a recommender system to support decision making for choosing computer systems and software supporting specific work scenarios. We have built a recommender system which allows users to describe CSCW according to the MoCA framework. The user is then presented with a list of collaborative software which may be used to facilitate the work as described. 

This study is motivated by the following research questions:  
 
 * **RQ1** Can articulation of collaborative work using the MoCA framework be used to assist in the identification of appropriate collaborative systems and software for facilitating collaborative work? 
 
 * **RQ2** Are there further descriptive dimensions useful in describing collaborative work that should be added to the MoCA framework? 

## BACKGROUND 
Various models for describing CSCW have been proposed to help users organize and conceptualize CSCW. Johansen's (1988) time-space matrix describes collaborative work in terms of location and synchronicity across two dimensions. Participants may find themselves in the same location, referred to as co-located or at different places, referred to as remote. Synchronicity is used to describe whether interaction between participants happens at the same time (synchronous) or at different times (asynchronous). See figure 1 for a visual of Johansen's time-space matrix.

| ![alt text](https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Cscwmatrix.jpg/640px-Cscwmatrix.jpg "TimeSpaceMatrix") |
|--------------------------------------------------------|
| Figure 1. Johansen's Time/Space Matrix (1988). From [Wikipedia] (https://en.wikipedia.org/wiki/Computer-supported_cooperative_work#/media/File:Cscwmatrix.jpg). Public Domain.
 |

In similar work, Desanctis & Gallupe (1987) further proposed descriptors which included a descriptor for the size of the group engaged in CSCW (smaller, larger), and a descriptor used to identify in general the type of task being conducted (planning, creativity, intellective, preference, cognitive, conflict, mixed motive). These elements helped describe the scale of the group undertaking CSCW as well as the complexity of the work objectives. 

As collaborative technologies evolved and improved the potential for supporting CSCW, more descriptors were proposed in an attempt to capture and describe support for collaboration. Nickerson (1997) offered a taxonomy of collaborative applications building upon the work of Johansen and Desanctis & Gallupe (1987). The work of Nickerson adds the modal dimension which essentially describes the form of communication that takes place between team members during CSCW. Nickerson  suggested three main possibilities for modal; audio communication, visual communication, and document or data communication. It was further recognized that tools could allow for more than one type of communication. For example, a synchronous collaborative meeting space may allow users to work on a document and talk about it at the same time, meaning that the tool allows for both audio and document communication.    

Further attempts to describe CSCW include the identification of both hardware and software required to facilitate the work (Kraemer & King, 1988); the consideration of usability and ergonomics related to tool acceptance among a group (Jarczyk, Loffler, & Volksen, 1992); and the categorization of collaborative systems according to specific technologies (Ellis, 2000). All of these efforts contributed to the various ways of describing and articulating CSCW, with the goal of helping users conceptualize and plan for the complexity of CSCW.  

### 1. Reflecting upon and articulating CSCW
Bannon & Schmidt (1989) suggest that too often technology is described with a focus on information flow between individuals. However, there must also be a consideration of the articulation work required to make the 'flow' possible. Collaborative tools enable the 'flow' of information and facilitate collaboration in distinct ways. Therefore a descriptive framework for describing how collaborative tools facilitate communication flows may be a useful heuristic for individuals planning CSCW. 

We believe there is value in reflecting on and articulating a description of collaborative work in planning for success. The MoCA   represents the latest attempt to design a framework, building upon a rich history of models for describing CSCW. We propose that asking users to describe their CSCW projects according to the MoCA framework can result in a list of appropriate software applications suitable to the task, but also gives a user a more holistic sense of the nature of the work.      

The next section discusses the MoCA framework followed by a section on software affordances.
 
### 2. The MoCA framework 
While many interesting approaches to describing CSCW have emerged, these models lack a connection with modern collaborative software features. This presents a challenge for users when selecting computer-based tools even when the specific type of work is properly articulated. The Model of Coordinated Action (MoCA), recently proposed by Lee and Paine (2015), is defined as a tool to describe complex collaborative situations. Recognizing that the landscape for collaborative technologies is rapidly changing and evolving, the model shifts our focus to describing the type of work that needs to facilitated. 

In total the MoCA framework consists of seven dimensions of coordinated action described below and illustrated in Figure 2. 

| ![alt text](https://depts.washington.edu/csclab/wordpress/wp-content/uploads/moca-key.png "Logo Title Text 1") |
|--------------------------------------------------------|
| Figure 2. The Model of Coordinated Action (MoCA) and its seven dimensions (Lee & Paine, 2015) |


*Synchronicity*: concerns a continuum of coordinated action ranging from being conducted synchronously (at the same time), to asynchronously (at different times). This dimension further recognizes that coordinated actions can be both synchronous and asynchronous. 

*Physical Distribution*: describes whether coordinated actions are taking place in the same geographic location (collocated) or at different geographic locations (distributed). 

We recognize that predicting the synchronicity and physical distribution throughout a CSCW project can vary over time and information about these dimensions can be a challenge to identify discretely.

*Scale*: is the number of participants involved in the collaboration. Information provided by this dimension illustrates the complexity of the computer-based tool. It is assumed that an increase in participants requires more robust social arrangements and new practices.

*Number of Communities of Practice*: focuses on the number of different identifiable communities of practice represented in the coordinated action. This dimension recognizes the importance of the different knowledge domains that may participate in the collaboration.

*Nascence*: discusses how unestablished (new) or established (old) a coordination action is. In other words, nascence aims to describe the familiarity level of participants with the collaborative task.

*Planned Permanence*: describes how long a coordinated action is expected to last for. Planned permanence addresses the challenge of predicting how long a coordinated action will last. 

*Turnover*: refers to the stability of the participant makeup for a given collaboration, or the rapidity of participants entering or leaving the collaboration. 

While some of the dimensions in the MoCA framework are familiar in CSCW, some of them are new. For instance, MoCA adds communities of practice as a descriptor for the social structure of participants, and information about the novelty of the work itself through the nascence dimension. Also, the framework includes participants' commitment or functional imperative to the work through planned permanence and group dynamics and variability through the turnover dimension.

Lee & Paine developed the MoCA framework to help researchers describe specific cases of CSCW. An examination of Humanity Road, a disaster relief virtual organization was used to demonstrate what the MoCA framework would look like in a coordinated action. Based on the MoCA dimensions, it was found that Humanity Road covered a range on the continuum of turnover since the organization had both long-term and short-term volunteers. Lee & Paine found it somewhat difficult to classify the idea of planned permanence for Humanity Road. When Humanity Road became a formal organization, the planned permanence was higher than none but still lower than other organizations. They came to the conclusion that since coordinated actions change over time, it is sensible that how a coordinated action looks using the dimensions of the MoCA framework would change as well. 

Lee & Paine argue that rather than viewing the mechanics of CSCW as uncharted territory, there are opportunities to identify patterns and similarity between projects, which may help us plan for future successful CSCW. The framework provides a rich vocabulary of concepts that can be used to describe complex ecosystems of collaborative work, but as with other models MoCA lacks an explicit connection with collaborative software features. 

### 3. Affordances of collaborative technologies
The notion of affordances is useful in defining how users interpret and make use of artifacts in the world. Salomon defines the term affordance as *“the perceived and actual properties of a thing, primarily those functional properties that determine just how the thing could possibly be used”* (Pea, 1993, p. 51). When considering emerging collaborative software and systems, affordances are not always evident to the user. As such it is not always clear how a tool can be used in a CSCW project to support collaboration.  

Bower (2015) has presented a model of collaborative learning technologies based upon a typological analysis of their affordances. The model was specifically developed to help educators select technologies that match their teaching and learning requirements by articulating what a tool can be used for. The typology also provides us with a framework for conceptualizing the broader collaborative software landscape. This exposition of individual technologies and their affordances can be useful in helping individuals select technologies that match their requirements as well as visualizing similar or related applications. See Figure 3 for a visual mind map of Bower’s typology. 

| ![alt text](http://www.weiterbildungsblog.de/wp-content/uploads/2015/02/bower_201502.jpg "Bower's typology") |
|--------------------------------------------------------|
| Figure 3. Bower’s (2015) typology of Web 2.0 collaborative technologies |

Our project will test whether the MoCA framework may be used as a tool to link the articulation of CSCW to the affordances of collaborative software. MoCA provides a framework for describing collaborative work which will be mapped to the affordances of collaborative technologies based on Bower's (2015) typology. We furthermore anticipate the consideration of additional descriptors to map CSCW to software tools.  
 
### 4. The problem we are trying to solve 
Selecting the right tool to support collaborative work is one of the main problems teams face. There is a wide array of  collaboration tools to choose from and as such selecting an appropriate tool can be a overwhelming and a significant challenge. Olsen & Olsen (2014) argue that the success of a CSCW project is contingent on the appropriate selection of tools which meet the needs of the team. This idea is supported by Dudezert, Gurkan & Karoui (2010) when they suggest a technological perspective on virtual collaboration, which states that the efficiency of a team is based on the tool selected for collaboration. With such a wide range of options, it is recommended to establish a set of criteria that would be used for choosing the most appropriate tool for collaboration. 

Colace, De Santo, Moscato & Picariello (2015) suggest the use of a recommender system to solve the challenge of matching CSCW projects to appropriate tools. Recommender systems have emerged to aid decision support in an age of abundance. Common applications of recommender systems include films, books and music recommendations based on interests (e.g., Netflix, Amazon, Spotify). In other cases, recommender systems can suggest contacts based on social networks (e.g., Facebook, LinkedIn) or search results based on user profiles (e.g., Google). In general, recommender systems aim to help users find the tools and information they need based on user's preferences, data and feedback are playing an increasingly important role in our lives. 

While the MoCA framework is primarily a way of describing collaborative work, we propose that some aspects of the framework can also be used to describe collaborative software and systems. These similarities will be tested to see if well articulated CSCW can be matched to software tools suitable for the work through the notion of affordances. Users often maintain historically developed understandings of the utility of collaborative software and systems which are always evolving. Conole and Dyke (2004) argue that articulating and exposing the affordances of collaborative software enables users to understand how technologies can be most effectively used to support collaborative activities. So we will also base our recommendation system on user perceptions as users can enter their description of software affordances.

We believe we can use the MoCA framework as a tool to describe collaborative work scenarios as well as describe tools which match specific scenarios. We will test this hypothesis by developing a recommender system to match CSCW projects with computer-based applications appropriate for specific work contexts.  

## OUR PROPOSAL: MatchMaker Application
Our proposal is to create a web application which recommends appropriate applications for collaborative work depending on the nature of the work as described through the MoCA framework. Users will have a chance to describe the collaborative work they wish to facilitate and be presented with the technologies most suited for the work. Users can also register applications they have used successfully to conduct collaborative work. This data will be used to grow a database of tools that have led to successful projects. Over time it is intended that the database of applications will grow and be used to improve suggestions offered to users seeking appropriate software recommendations. With this approach, our application database will store valuable user experiences and evolve over time as new applications become available.  

Although we will base our initial development on our literature review and the MoCA framework, we will follow an iterative validation process based on our own experiences as tool users. Also, we will include a validation process with potential users by conducting a survey. This evaluation will validate our approach in developing our idea, providing feedback about possible extra features or dimensions not considered, and test if users feel motivated to use our recommendation system. In the next subsection we describe our process in more detail.

For details about our collaboration process please refer to [APPENDIX 3](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%203%20-%20Milestones.md)

### 1. Methodology 

We initially defined the Matchmaker Application as a tool where a user can describe collaborative work, using the MoCA framework dimensions, with the purpose of obtaining a list of software that best matches the criteria entered by the user. In the next subsections we describe the process we followed to refine this initial concept providing an overview about its implementation as a web service.

#### Conception 
The researchers tried to (1) describe collaborative work they were familiar with using the MoCA dimensions and (2) think about specific software features that could help to support the work characteristics. From exercise (1) we concluded that the MoCA framework was lacking a dimension that could describe the purpose of an activity (e.g.,software development, document authoring, video creation). This finding led us to a discussion where we agreed on the importance of having an additional dimension which describes the purpose of the work. As computer-based applications are generally focused on specific tasks this information was crucial for our recommendation system. The result was a set of criteria that included the 7 dimensions of the MoCA framework augmented with the additional criteria of ‘purpose’. This list of criteria is referred to in the report as descriptors for collaborative work.

Exercise (2) got us thinking about a way to categorize software features. We came up with a list of tool descriptors and some possible values. For example, we created the descriptor 'service type', in which some of the possible options are: free online access, Fremium (30 days trial).  It should be noted that this was an iterative process where all researchers contributed with ideas to add, refine or in some cases remove descriptors and values. Our goal was to ensure any descriptor added to describing software features would be used to link to the description of collaborative work and become useful for the recommendation algorithm. Most descriptors and values were selected based on the personal experience of researchers, when this was not the case we explicitly mentioned our sources from the literature review.

#### Design
With the theoretical base for the matchmaker application, we started the design phase. First, we defined two main functions for the application searching for an application (user requirement 1) and registering an application (user requirement 2). Searching for an application should be implemented by prompting the user with a questionnaire where each question collects information about a particular aspect of collaborative work. Initially, we considered a questionnaire with 7 questions in correspondence with the seven dimensions in the MoCA framework, however, once we included the descriptor 'purpose' we had to add one more question to the list. 

In addition to user requirement 1, we also recognized that a major factor of the MatchMaker Application's success would be the diversity of applications in its database. So, we defined the second user requirement, registering an application, as a mechanism by which users could help to improve the MatchMaker dataset. This requirement was implemented using a form where users would register relevant information about the application based on our criteria, specifically the descriptors for tool features.

In the second step of the design phase, we designed two interface mock-ups, one for the searching for an application feature, and another one for registering an application. The process of designing the mock-ups made us rethink about the technical definitions introduced in MoCA for a more colloquial language. Furthermore, the mock-ups allowed us to start discussions about the visual components we wanted to use in the MatchMaker Application. We considered taking open-ended text submissions from users, but that solution would not allow us to easily match user criteria with software features. So, we decided to select a list of possible values for each descriptor. The selection on whether a descriptor should have a single answer or multiple answers determined the type of form element to be used on the application: radio buttons or check-boxes respectively. For a complete list of descriptors and their possible values refer to section 2.2 Descriptors for tool features and 2.3 Descriptors for collaborative work.

#### Development 
As we moved into the development phase, we chose to develop the MatchMaker Application as a web service. Most of the computer-based tools available today are accessible through the web, so it was a natural decision to select such a platform for our application. While the web interface was developed, based on the mock-ups, two other activities started to take place, database design and the creation of a list of applications.

The database structure was defined by the descriptors and the possible values. We found a challenge when investigating a suitable platform to host our database. Initially, we contacted the Technical Service office at the University of Victoria (UVic) and got a positive answer; they would set-up a MySQl database for the project and would provide us with the information to access it. However, with the UVic service, access was limited to only those connections made from campus. With respect to this restriction, we agreed we needed access for all potential users including those outside the UVic campus, so we rejected that option. After more research, we found [Google's platform](https://cloud.google.com/compute/), which offered us free hosting and enabled access for all users. This platform was selected to host the database and one researcher was dedicated to its initial set up and ongoing management.

The list of applications was made to collect tool data, which would be used as a initial database for the MatchMaker Application. The list was made in a Google spreadsheet where each column represented one tool descriptor and each cell contained one of the possible values previously defined. In total, we classified around 40 applications. This exercise, with real applications and features, allowed us to revisit and refine our descriptor definitions and possible values. When database development was complete, the information in the list was transferred to tables in the database.

After the interface development was complete we integrated the database with the website. Concurrently, researchers also ensured the consistency of descriptors in the project by, in iterative cycles, comparing descriptor definitions and the list of applications against the website in development. Once the development reached a stable point where all components were functional, we moved forward to user validation phase.

#### Validation
In order to validate our idea and our approach we designed a survey. First, we asked about the usefulness of the idea. Then, for each main function, searching for an application and registering an application, we asked about the appropriateness of the vocabulary, completeness and utility of the descriptors, and experience with the tool feature. Finally, we ask about the usefulness of the tool and motivation to contribute to the project. Optionally, participants had an open area on each question to elaborate on their answers. To review the survey form refer to [Appendix 4](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%204%20-%20Survey.pdf)            

The final step in our process was to collect and analyze the results from the survey. Feedback provided from potential users is used to draw our future plan of action and consider new versions of the tool.

 
### 2. Software design

MatchMaker Application is a recommendation system that aims to help users select appropriate collaborative tools based on the articulation of their work through the MoCA framework. In particular, the application was defined with two main functions. First, the software, by asking a series of questions, allows any user to describe the type of collaborative work to be done and as a result the application suggests appropriate tools. This function is identified as the first user requirement: *UR1: Searching for an application*. The second main function allows users to fill out particular information about collaborative computer-based tools in the system database. This action registers the tool in the system helping populate the MatchMaker database. This function is identified as the second user requirement: *UR2: Registering an application*. 

Once user requirements were set, we proceeded to design an interface mock-up for UR1 and UR2. Figure 4 and 5 show our preliminary designs. Note that the vocabulary was adapted to be more colloquial to make the site more user friendly. 

| <img src="https://raw.githubusercontent.com/maryi/CSCW-Project/master/Images/Find%20app1.4.png" width="300">                 |
|--------------------------------------------------------|
| Figure 4. Preliminary interface Mockup for UR1: Searching for an application |


| <img src="https://raw.githubusercontent.com/maryi/CSCW-Project/master/Images/Register%20app1.4.png" width="300">                 |
|--------------------------------------------------------|
| Figure 5. Preliminary interface Mockup for UR2: Registering an application |


In order to implement the listed requirements, we defined a set of criteria to help us classify work and tools. To refer to each criterion we adopted the term *-descriptors-*. 
The initial set of descriptors began with the elements of the MoCA framework. However, we identified that not all descriptors are suitable to describe collaborative work and tool features. Based on the user requirements, in UR1 we need the user to describe the nature of the collaboration they intend to support, so the descriptors should allow them to identify the characteristics of the work to be done. Meanwhile, in UR2 the application requires the user to describe the features of a tool. Thus, descriptors have to be feature oriented in order to describe the capabilities of a particular tool. As a result, we divided the initial list in two, creating two sets of descriptors, for UR1: Descriptors for collaborative work and for UR2: Descriptors for tool features.

#### 2.1 Descriptors for tool features
Tool descriptors were designed to collect information about how a software tool supports collaborative activities. This information is used when a user is searching for software in the MatchMaker Application. The user describes the work to be supported by the tool and the recommendation system creates a list of applications that match user criteria. Details about descriptors and possible values for each is presented below in Table 1. The possible values selected for each descriptor in most cases is based on the personal experiences of the researchers, when this is not the case we provide more detail about our sources. 

Table 1 shows the set of descriptors used for tool features, along with name, possible values and the selection type offered to the user in the web interface. More details about the descriptors including their definitions and possible values will be presented next.

| Name                              | Possible options                                                                                                                                 | Selection type  |
|-----------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------|-----------------|
| Tool name                         | Free text                                                                                                                                        | -               |
| Creator link                      | Free text                                                                                                                                        | -               |
| Synchronicity                     | Completely async, supports for both, completely sync                                                                                             | Single choice   |
| Awareness mechanisms              | event log/ notifications/ performance graphs/ email notifications/ issues tracking/ chat/forum                                                   | Multiple choice |
| Scale                             | 2,5,10,N                                                                                                                                         | Single choice   |
| Domains (Communities of Practice) | Complete list in [Appendix 1](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%201%20-%20Domains%20values%20based%20on%20JACS.md)                                                                                                                      | Multiple choice |
| Nascence                          | Routine, Most of the tasks are routine, Most of the tasks will be new, Developing                                                                | Single choice   |
| Learning curve                    | Easy/Medium/Fare/Hard                                                                                                                            | Single choice   |
| Service type                      | Free online open access, Free online account, Paid online account, Subscription service, Freemium (30 trial), Free software download, Paid software download | Multiple choice |
| Content privacy                   | Private channels/ Open messages to registered users / Open messages to general public                                                            | Multiple choice |
| Hierarchy                         | All users same role, Role based, Strict hierarchy (owner and members)                                                                                                | Multiple choice |
| Tool purpose                      | Complete list in [Appendix 2](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%202%20-%20Purpose%20values.md)         | Multiple choice |
| Compatibility                     | Free text                                                                                                                                        | -               |
| Modality                          | audio communication, visual communication, document  communication, data communication, visualization communication, short message communication | Multiple choice |

| Table 1. Descriptors for tool features |




*Name*: used to identify the tool.

*Creator link*: link to the web resource where the tool can be accessed or downloaded.

*Synchronicity*: describes the tools ability to support different modes of work. In both sets of descriptors it has the same name and the same options with slight differences based on the context. This descriptor can take three values:
 
 * Completely asynchronous: this means that participants are not required to use the tool at the same time to make progress on the work (e.g., email systems).
 * Completely synchronous: this means that the participation of another team member is required for the tool to work (e.g., video-conference).
 * Both: the collaboration requires asynchronous and synchronous work. Therefore, the computer-based tool provides support for both modes.

*Awareness mechanisms*: lists the possible features that help with individual and team awareness. Possible values for this descriptor are:
 
 * Event log
 * Notifications
 * Performance graphs
 * Email notifications
 * Issue tracking
 * Chat
 * Forum

*Scale*: describes the maximum number of participants supported by the tool. The possible values selected represent the most popular accommodations: 2, less or equal to 5, less or equal to 10, and more than 10 participants. 

*Domains*: lists the number of knowledge domains for which the tool can be used for. The selection of possible values for this descriptor was based on the high level categories of JACS ([Joint Academic Coding System](https://www.hesa.ac.uk/index.php?option=com_content&view=article&id=158 "JACS")). For a complete list of possible values for this descriptor refer to [APPENDIX 1](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%201%20-%20Domains%20values%20based%20on%20JACS.md)

*Nascence*: describes the level of novelty or routine work that can be done in the tool. In our solution, we kept the descriptor with the same definition in both UR1 and UR2. Possible values are:
 
 * Routine: support for familiar tasks
 * Most of the tasks are routine
 * Most of the tasks will be new
 * Developing: support for evolving tasks

*Learning curve*: provides information about the effort required to use the tool. Possible values are: 
 
 * Easy
 * Medium
 * Fare
 * Hard

*Service type*: describes the business model of the tool developers. Based on the researchers experience we listed possible values as:
 
 * Free online open access
 * Free online account
 * Paid online account
 * Subscription service
 * Freemium (30 trial)
 * Free software download
 * Paid software download

*Hierarchy*: describes possible roles, and permissions available in the tool. Roles may be used to delineate project managers from project workers, faculty from students, etc.  

 * All users same role: there is not a role assigning feature, all participants in the tool have the same permissions.
 * Role based: the tool offers a role assigning feature with administrative permission differences. 
 * Strict hierarchy: the tool has administrative permission differences for certain users, but does not offer the option to modify the permissions. For example, only the owner of the application account can invite new members. 

*Tool purpose*: illustrates the main purpose of the tool. We based our selection of possible values on the typology described by Bower (2015) as technologies for collaboration. The complete list of possible values is in [Appendix 2](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%202%20-%20Purpose%20values.md)

*Compatibility*: Provides information about software tools that can be integrated with one another (e.g., Slack has integrations with Twitter) as well as tools that are commonly used together as complements (e.g., Github and Trello). This descriptor is free text.

*Modality*: Based on Nickerson's (1997) taxonomy this descriptor provides information about the nature of communication within the tool.  We contributed to the modal dimension, adding a few further options including visualization communication and short message communication. Available options now include: 

 * Audio Communication 
 * Visual Communication 
 * Document Communication 
 * Data Communication 
 * Visualization Communication 
 * Short Message Communication

#### 2.2 Descriptors for collaborative work
The set of descriptors used to characterize collaborative work is mainly comprised of the dimensions proposed in the MoCA framework with the addition of the descriptor *purpose*. We found that although MoCA represented a good base to describe collaborative work, the framework presents a high level description for each dimension. Accordingly, the first challenge is to create a less abstract version of MoCA with applicable definitions for each of its dimensions that could fit into our classification purposes.  

Below each descriptor is described with the name, possible options and the selection type offered to the user in the web interface in Table 2. The rationale for each option is given next.


|                Name               |                                  Possible options                                 |  Selection type |
|:---------------------------------:|:---------------------------------------------------------------------------------:|:---------------:|
| Scale                             | 2,5,10,N                                                                          | Single choice   |
| Physical Distribution             | Collocated / distributed                                                           | Single choice   |
| Synchronicity                     | Completely asynchronous, supports for both, completely synchronous                              | Single choice   |
| Planned Permanence                | Couple of days/ 1 month / 6 months / More time                                    | Single choice   |
| Turnover                          | Low, Medium, High                                                                 | Single choice   |
| Nascence                          | Routine, Most of the tasks are routine, Most of the tasks will be new, Developing | Single choice   |
| Domains (Communities of Practice) | Complete list in [Appendix 1](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%201%20-%20Domains%20values%20based%20on%20JACS.md)                                                       | Multiple choice |
| Purpose                           | Complete list in [Appendix 2](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%202%20-%20Purpose%20values.md)                                                       | Multiple choice |

| Table 2. Descriptors for collaborative work |




*Scale*: similar to the original version, represents an approximate number of people involved in the collaborative work that should have access to the common artifacts through computer-based tools. The possible values selected represent the most popular accommodations: 2, less than or equal to 5, less than or equal to 10, and more than 10 participants. 

*Physical Distribution*: this descriptor provides information about the location of participants, thus the possible values are distributed or collocated. 

*Synchronicity*: represents the nature of interactions between participants. This descriptor can take three values:
 
 * Completely asynchronous: describes collaboration that does not require participants to be working simultaneously on the coordinated action in order to make progress on the work. 
 * Completely synchronous: collaboration where participation of all or a significant number of team members are required to work simultaneously in order to make progress in the coordinated action. 
 * Both: the collaborative action requires asynchronous and synchronous work. 
 
*Planned Permanence*: this descriptor provides information about the length of the collaboration. In this case, we defined the following possible options: couple of days, less than or equal to 1 month, less than or equal to 6 months, and more time. 

*Turnover*: represents the rapidity with which group members enter or leave from the collaboration. We defined three possible options:

 * Low: for closed group and private collaboration
 * Medium: closed group, but with the possibility to have private or open collaboration
 * High: open group, and open collaboration to general public

*Nascence*: describes the level of familiarity of participants with respect to the coordinated action. For this descriptor we defined the possible values as:
 
 * Routine: support for familiar tasks
 * Most of the tasks are routine
 * Most of the tasks will be new
 * Developing: support for evolving tasks

*Domains*: this descriptor is related to the number of communities of practice dimension in the MoCA framework. The original dimension addressed the number of communities of practice represented in the coordinated action. However, while we think the question about 'how many?' is important we think another question 'which ones?' is more relevant to our purpose. In fact, by selecting which communities are included in the collaboration the user is also providing information about the number involved. 

If the user indicates collaboration between a single community, that information does not factor into the recommendation of a specific tool. However, if the user indicates for example, engineering and general public, our application can have an additional filter to select potentially useful tools for those domains.

In particular, the selection of possible values for this descriptor was based on the high level categories of JACS ([Joint Academic Coding System](https://www.hesa.ac.uk/index.php?option=com_content&view=article&id=158 "JACS")). For a complete list of possible values in this descriptor refer to [Appendix 1](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%201%20-%20Domains%20values%20based%20on%20JACS.md)

*Purpose*: This descriptor was added to complete the definition of the coordinated action. We wanted to be specific about the kind of collaboration described by the user. We based our selection of possible values in the typology described by Bower (2015) as technologies for collaboration. The complete list of possible values is in [Appendix 2](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%202%20-%20Purpose%20values.md)

We found that the two sets of descriptors differ in nature and often they do not present a linear correspondence. For that reason, we developed a connection between the descriptors of the work and the descriptors of the applications.

#### 2.3 Description of the connection between the descriptors for collaborative work and the descriptors for tool features
 
What happens when a user describes collaborative work in the *physical distribution* descriptor as *'distributed team'*? MatchMaker Application looks for applications with multiple *awareness mechanisms*, information stored in the descriptor of the same name in descriptors for tool features. As exposed in the example, we developed a way to connect the two set of descriptors by identifying the tool features that contribute to support particular collaborative work. Table 3 shows how the two sets of descriptors are connected, below we present more examples of our process and more details about our rationale.
 
| Descriptors for collaborative work | Descriptors for tool features      |
|------------------------------------|-----------------------------------|
| Scale                              | Scale                             |
| Physical Distribution              | Awareness mechanisms              |
| Synchronicity                      | Synchronicity                     |
| Planned Permanence                 | Learning curve, Service type      |
| Turnover                           | Content privacy, Hierarchy        |
| Nascence                           | Nascence                          |
| Domains (Communities of Practice)  | Domains (Communities of Practice) |
| Purpose                            | Tool purpose                      |

| Table 3. Connection between descriptors for collaborative work and descriptors for tool features |

It should be noted that not all descriptors are different, we found that some of them are applicable in both contexts, to describe work and to describe a tool, in those cases we leave the same name in both sets of descriptors. For instance, the scale dimension in MoCA that describes the number of participants in a coordinated action has a linear correspondence with the scalability of a tool. In another case, we found that more than one descriptor in the application could contribute to identifying potential benefits for one descriptor in collaborative work. Such was the case with the descriptor of work *Planned permanence* where *service type* and *learning curve* were both selected as application descriptors. Below we detailed the match we made for each descriptor for collaborative work.

*Scale*: this descriptor is paired with another one of the same name in the tool-feature descriptor set, where the possible values represent the maximum number of participants supported by the tool.

*Physical Distribution*: based on the literature covered in the class (e.g., Olson & Olson, 2014) we know collaboration in a distributed team is challenging, so we considered that our application should make recommendations in this dimension based on the amount of *awareness mechanisms* provided by the tool.

*Synchronicity*: in both sets of descriptors synchronicity has the same name and same options with slight differences based on the context. 
 
*Planned Permanence*: this descriptor provides information about the length of the collaboration. The rationale we followed to suggest an appropriate tool given this information is based on two assumptions: 1) for a long-term collaboration participants may be more willing to spend time learning the complexities of a tool and 2) they are more open to pay for software or install it on their computers. Consequently, this descriptor is paired with *learning curve* and *service type* in the descriptors for tool features.

*Turnover*: in order to have support for this descriptor, we selected *content privacy* and *hierarchy* from the tool features set. This decision was made on the basis that both, describing the possibilities of information visibility and assigning roles, define the level of turnover in the work.

*Nascence*: although we agreed this is an important descriptor for collaborative work, we failed to see the way it would benefit from any particular tool feature. In our solution, we kept the descriptor and possible values with the same definition in both descriptions for work and tools.

*Domains*: this descriptor is defined in both sets of descriptors, as we are interested to know which knowledge areas the collaboration will take place and what knowledge areas the tool supports.

*Purpose*: this descriptor is paired with another one of the same name. Similar to the case of *'domains'*, we are interested to know the purpose of the collaboration and what purposes the tool can support. 

### 3. Technical specifications

The website is made up of two components: the database and the website (HTML, CSS, and PHP files). The database is coded in MYSQL and stores the list of all the applications that have been registered as well as the complete list of descriptors for each application. The HTML and CSS files define what the user sees on the website and the PHP enables communication between the database and the website. Both the website files and the database are hosted on the [Google Cloud computing platform](https://cloud.google.com/compute/). This option, offered as a free service allowed us to have both project components, website and database, on the same infrastructure, which made it easier to integrate them while ensuring high availability of the service for potential users.

| <img src="https://raw.githubusercontent.com/maryi/CSCW-Project/master/Images/Find%20appScreenshot.PNG" width="300">                 |
|--------------------------------------------------------|
| Figure 6. Partial screenshot - searching for collaborative tools |


Currently, our website can be accessed from [http://matchmaker-1137.appspot.com/](http://matchmaker-1137.appspot.com/). The website has two primary functions, searching for collaborative tools and registering collaborative tools, Figures 6 and 7 show partial screenshots of the website for each. Currently, the search function works fairly simplistically and just takes the exact text entered in the HTML form and checks if it matches exactly with any application descriptors in the database. The register function works by adding the values from the HTML form into the proper descriptor in the database. In addition to the two functions, we have a home page that describes the intent of the MatchMaker Application and how it works, as well as an “About Us” page that contains a link to all of our emails where people can send us feedback.

| <img src="https://raw.githubusercontent.com/maryi/CSCW-Project/master/Images/Register%20appScreenshot.PNG" width="300">                 |
|--------------------------------------------------------|
| Figure 7. Partial screenshot - registering collaborative tools |
 
### 4. Expected results 

We set out to create an application that accurately suggests appropriate software to support collaborative work to users. In a world where a new application is released nearly every minute, our intent was to bring together users and applications that support collaborative work.

Initially, we tried to classify applications using the MoCA framework exclusively, however; when we started to actually design our website, it was clear that some of the MoCA dimensions were not going to be obvious enough to users or relevant to recommending a piece of software. For example, the dimension “number of communities of practice” did not provide relevant information that could be used by the system to recommend a collaborative application. Instead of asking about the number of communities of practice we asked about the domains of study the application would be used to support. We expect that this approach of adding, replacing, or reframing dimensions that are not helpful for our classification purposes will improve the usefulness of our application.

When preparing the website, we described the MoCA dimensions using simple sentences to ensure the language would be easy for users to understand regardless of their background. We also expect that although the search function on the website does not return perfect results it will return good enough results so that the user will always be able to find a helpful application. Lastly, we think that the process of answering all the questions on the search page will get the user thinking about the complexity of planning a CSCW project. We believe that the MatchMaker Application will assist in raising awareness to the importance of articulating the complexities and issues of CSCW and its relation to software selection.  

In all fields of work and study the methods of collaboration are constantly evolving over time. The insights gained from this study will provide tool developers with a more complete theoretical foundation to understand collaborative processes and perhaps create more effective tools. Finally with more collaborative tools emerging and improving, efficiency and productivity in teams will hopefully be increased.

#### 4.1. Survey feedback

A survey was conducted to receive feedback on the usability and feasibility of MatchMaker Application. To review the survey form refer to [Appendix 4](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%204%20-%20Survey.pdf). The survey ran from November 21 - November 28, 2015. In total thirteen responses were received during the survey window. The survey was distributed to a wide range of people from a variety of backgrounds. 

Users were initially asked to imagine a recommendation system that helps users to find the most suitable software to support specific types of collaborative work. Users were then asked whether or not they would use the system or if they think it would be useful. One hundred percent of users responded ‘Yes’ and the majority further responded with comments indicating that it would help inform them of applications that are available which they may not be aware of.  Additional feedback suggested this could be a useful service to find tools that would be helpful for conducting CSCW in a school or professional setting.

The survey then asked questions specific to MatchMaker Application. Upon studying the results it was determined that the search function was a success: Seventy-Seven percent of users had a good overall experience using the search function, twenty-three percent had a fair overall experience, and zero percent had a negative overall experience. Users claimed that the questions asked by the search were clear and easy to answer and that site navigation was easy; however, some users had trouble understanding the descriptors ‘purpose’ and ‘nature of collaboration’.

Users also agreed that each of our descriptors for collaborative work were necessary, only stating that it may be useful to have more domain-specific options for healthcare and engineering in particular.  Future iterations of the MatchMaker Application would have to account for a more thorough list of possible domains, perhaps using the JACS complete classification framework. 

Astonishingly, one hundred percent of users agree that they would find this tool useful and would use it in the future, assuming it would be further refined.

When considering the registration portion of the website twenty-three percent of users felt motivated to contribute to MatchMaker Application through its registration page. Other users stated that: they were unaware or ignorant of applications they could contribute to the database; did not feel they had any responsibility to do so, assuming it was meant for developers; or simply were confused as to why they would be asked to contribute to the database at all. One response stated that the user would only be interested in contributing to MatchMaker Application if it were well known or if they owned a portion of it.

Users were additionally asked for suggestions to make the MatchMaker Application better. The most common suggestion was that the website should be refined to be less ‘text-heavy’. Other suggestions included: making the site more aesthetically pleasing; implementing toggles for additional information, especially concerning descriptor definitions; supplying additional search and registration options for tools used by management; and making the language easier to understand for non-academics.

## LIMITATIONS  

Our two biggest limitations in this endeavor are the novelty of the MoCA framework and the availability of time to develop the application.

This work is based on the MoCA framework, a novel framework for describing CSCW, so we might be limiting our development by choosing this approach. The MoCA framework was designed as a tool to articulate and characterize collaborative work. However, MoCA does not explore the role of specific tool features in the support of this kind of work. Due to this limitation, our challenge was to create a classification for tool features and define the aspects of collaborative work that could find benefits from those. Furthermore, we found that MoCA was lacking of a dimension that could describe the purpose of a coordinated action. We notice that without this information collaborative activities would look the same, but be very different in nature (e.g., software development, video edition). To overcome this limitation, we added the 'purpose' as an additional descriptor for collaborative work.

In addition to the challenges we faced with the MoCA framework, we were limited by time. This meant that we were not able to implement all the features we wanted for our recommendation system and had to focus on the essential features first. For example, it would have been nice to have a feature that showed people who liked application X also found application Y helpful. Due to time constraints, we were not able to incorporate users' feedback from the survey into the application. Instead, these recommendations are used to reflect on our approach and draw some directions in the future work section. Ideally, if we had more time, we would want to implement the user proposed changes, hand out another survey, and keep iteratively improving our design.

Now that we have finished the application implementation, it is clear that our search recommendation algorithm is also a limitation. Ideally, we would want to only recommend applications that strictly satisfy the requirements given by the user. However, due to time constraints and the difficulty of discovering (and implementing) such an algorithm, MatchMaker Application recommends applications that only match some of the criteria selected and not all the criteria. In addition, our dataset was composed by roughly 50 applications registered at this time, which we recognized is not a fair sample of the myriad of tools available today. Finally, we recognize it is difficult to develop a formula to recommend the perfect application, however, we are certain that this work has the potential to be an excellent recommender system and can be improved with more iterations of user evaluation and a larger dataset.
 
## FUTURE WORK

The evolution of MatchMaker Application is expected to be an ongoing process through user testing; however, immediate implementation requirements entail growing the user-base, most likely through networking and advertising; research into and perfection of the search algorithm; changes to the website design and vocabulary used to facilitate a more user-friendly experience; and adding domain specific searches for various fields suggested by users. 

We sense that connecting CSCW teams to the best tools for facilitating their work will remain a challenge for many years to come. We hope that our project demonstrates that articulating collaborative work using the MoCA framework can help connect users to tools which facilitate successful CSCW. Our work should also add to the awareness and development of the MoCA framework. Our intent is that the MatchMaker Application becomes a place where users can continue registering applications into the future.  Furthermore, the logic which maps the MatchMaker Application data of collaborative software to the MoCA framework will be made available in case developers wish to further adapt and enhance the model.   

Lee & Paine (2015) suggested an area of future research around the MoCA framework in identifying constellations of technologies relevant to specific coordinated actions fitting certain profiles of CSCW. In the future, the MatchMaker Application may be used to help identify the relationships between types of work and the appropriate constellations of software tools. MatchMaker Application is currently capable of obtaining feedback from its users following their use of its registration and search services, but still requires the ability to effectively collect data based on the success of its results after its users have completed their CSCW. These datasets could be used to further improve the recommender system as well as providing a rich resource for CSCW researchers.   

## LESSONS LEARNED AND THEIR IMPACT

One of the first things that we learned during the conception phase was that the MoCA framework alone was not enough to accurately classify applications. We had to add  new descriptors in addition to the ones found in MoCA, for example purpose, and define a similar set of descriptors for computer-based tools, such as service type, to have an accurate recommendation system. This naturally complicated our search algorithm as we then had to determine ways to map descriptors of collaborative work to descriptors of collaborative tools.   

In addition, we learned early on that our application would not contain all the features we had initially envisioned due to both the programming challenge of implementing the features as well as time constraints. 

We learned a lot about collaborative tools like GitHub as we engaged in documentation and code development. Initially, we had a lot of commits that did not contain messages to describe what was done in the commit. This made it difficult to tell what changes were made and even more difficult to correct from commits that affected functionality. We also learned a lot about team dynamics. At the start, we were fairly disorganized but after the first proposal deadline we started assigning ourselves to specific tasks so everyone knew what they were supposed to do and knew what other group members were working on. We also started using Github more deliberately at this point, making use of the issues tool to engage in discussions and assign team members to specific tasks.  

### ACKNOWLEDGMENTS 
We would like to thank the students and leaders of our CSCW course at the University of Victoria for their thoughtful feedback and comments while presenting our research proposal. Specifically we wish to thank Margaret-Anne Storey and Eirini Kalliamvakou for ongoing feedback throughout our project.  
 
### REFERENCES 
Bafoutsou, G., & Mentzas, G. (2002). Review and functional classification of collaborative systems. International journal of information management, 22(4), 281-305.

Bannon, L. J., & Schmidt, K. (1989). CSCW-four characters in search of a context. DAIMI Report Series, 18 (289).

Bower, M. (2015), Deriving a typology of Web 2.0 learning technologies. British Journal of Educational Technology. doi: 10.1111/bjet.12344 
 
Colace, F., De Santo, M., Greco, L., Moscato, V., Picariello, A. (2015). A Collaborative User-Centered Framework for Recommending Items in Online Social Networks. Computers in Human Behaviour. doi:10.1016/j.chb.2014.12.011 
 
Conole, G., & Dyke, M. (2004). What are the affordances of information and communication technologies?. Association for Learning Technology Journal, 12(2), 113-124. 
 
Conole, G., Dyke, M., Oliver, M., & Seale, J. (2004). Mapping pedagogy and tools for effective learning design. Computers & Education, 43(1), 17-33. 

Desanctis, G., & Gallupe, R.B. (1987). A foundation for the study of group decision support systems. Management science, 33(5), 589-609.
 
Dudezert. A., Gurkan, A., Karoui, M. (2010). Virtual Team Collaboration: A Review of Literature and Perspectives. Proceedings of the Sixteenth Americas Conference on Information Systems, Lima, Peru; August 12-15, 2010, 2010, Lima, Peru. 

Ellis, L. (2000). An evaluation framework for collaborative systems. Colorado University Technical Report CU-CS-901-00.

Jarczyk, A., Loffler, P., & Volksen, G.(1992). Computer supported cooperative work (CSCW)-state of the art and suggestions for future work. Internal Report, Version 1.0, Siemens AG, Corporate Research.

Johansen, R. (1988). Groupware: Computer support for business teams. The Free Press. New York, NY.

Kraemer, K., & King, J. (1988). Computer-based systems for cooperative work and group decision making. ACM Computing Surveys, 20(2), 115–146.
 
Lee, C. P., & Paine, D. (2015). From The Matrix to a Model of Coordinated Action (MoCA): A Conceptual Framework of and for CSCW. In Proceedings of the 18th ACM Conference on Computer Supported Cooperative Work & Social Computing (pp. 179-194). ACM.

Nickerson, R. C. (1997). A taxonomy of collaborative applications. In Proceedings of the AIS 1997 Americas Conference on Information Systems (Vol. 52, pp. 560-562).

Nickerson, R. C., Varshney, U., & Muntermann, J. (2013). A method for taxonomy development and its application in information systems. European Journal of Information Systems, 22(3), 336-359.

Olson, J. & Olson, G. (2014). How To Make Distance Work Work. Interactions, XXI.2 March + April 2014, pg. 28. Association for Computing Machinery. 
 
Pea, R. (1993). Practices of distributed intelligence and designs for education.  In Salomon, ed., Distributed cognitions: Psychological and educational considerations. Cambridge University Press. 
