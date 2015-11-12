#MatchMaker Application – A web service based on the MoCA framework

##### *ABSTRACT* 
Computer Supported Collaborative Work (CSCW) is increasingly becoming a significant component of living and working in modern times. Computer mediated collaborations occur in all aspects of our personal and professional lives. Furthermore, the technologies which can be used to facilitate CSCW are diverse and ever changing. Due to the breadth of options, it is a challenge for individuals selecting appropriate tools to support collaborative work. As specific tools are often designed to support specific collaborative work we believe that a system for helping people match tools to types of work is needed.      

The Model of Coordinated Action (MoCA) framework provides a descriptive lens for describing the complex nature of collaborative work with the goal of helping us understand the collaborative technologies which best facilitate the work. Our project explores whether having individuals articulate the type of work to be facilitated using the dimensions of the MoCA framework can surface appropriate technologies for facilitating that work. 
 
**Author Keywords**: Collaborative work; Model of Coordinated Action, MoCA Framework CSCW; Software affordances 
 
**ACM Classification Keywords**: Design, Experimentation, Theory 
 
## INTRODUCTION 
The study of CSCW is concerned with supporting multiple individuals working together mediated by computer systems and software. One of the recurring challenges in CSCW is matching the appropriate tools to the type of work to be facilitated. Various ways of articulating CSCW have emerged including Johansen's (1988) time-space matrix which described collaborative work in terms of location and synchronicity.However, we argue that for any person or group planning a CSCW project, the vast availability of potential tools is overwhelming and a challenge to navigate.  

The appropriate selection of a suite of technologies which meets the needs of a group can have a great impact on the success of the collaboration (Olsen & Olsen, 2014). Technologies are often selected based on past experiences or accessibility. The selection of tools to support CSCW may occur without much consideration, and this presents a risk to success. By attempting to articulate the elements of the collaborative work which will be undertaken, a more thoughtful selection of appropriate tools may occur. 

Complicating this further is the wide array of collaborative technologies now available via the Internet. Many collaborative technologies provide inherent affordances which facilitate types of collaborative activity. The challenge for users engaging in collaborative work, is matching the appropriate technology to their specific needs.

We believe that if users take the time to reflect upon and describe the type of collaborative work they seek to conduct, this information can be used to suggest appropriate collaborative tools. The recently proposed MoCA framework (Lee & Paine, 2015) provides a useful lens for describing collaborative work. Our intent is to test and extend -if required- the MoCA framework when used to support decision making when choosing computer systems and software which support specific work scenarios. As such, this study is driven by the following research questions:  
 
 * **RQ1** Can articulation of collaborative work using the MoCA framework be used to assist in the identification of appropriate collaborative systems and software for facilitating collaborative work? 
 
 * **RQ2** Are there further descriptive dimensions useful in describing collaborative work that should the added to the MoCA framework? 

## BACKGROUND 
Various models for describing CSCW have been proposed. Johansen's (1988) time-space matrix described collaborative work in terms of location and synchronicity across two dimensions. Participants may find themselves in the same location, referred to as co-located or at different places, referred to as remote. Synchronicity is used to describe whether interaction happens at the same time (synchronous) or at different times (asynchronous). 

In a similar work, Desanctis & Gallupe (1987) further proposed descriptors which included the size of the group engaged in CSCW (smaller, larger), and one used to identify generally the type of task being conducted (planning, creativity, intellective, preference, cognitive, conflict, mixed motive).  

As technology mechanisms were enriched, more descriptors were proposed in a attempt to capture its support for collaboration. Such is the case when Nickerson (1997) offered a taxonomy of collaborative applications building upon the work of Johansen and Desanctis & Gallupe. The work of Nickerson adds the modal dimension which is essentially the form of communication that takes place between team members during CSCW. Nickerson also suggested three main possibilities for modal; audio communication, visual communication, document or data communication. It was further recognized that tools could allow for more than one type of communication. For example, a synchronous collaborative meeting space may allow users to work on a document and talk about it at the same time, meaning that the tool allows for both audio and document communication.    

Further attempts to describing CSCW include the addition of the hardware and software required to facilitate the work (Kraemer & King, 1988); the notion of usability and ergonomics related to tool acceptance among a group (Jarczyk, Loffler, & Volksen, 1992); and the categorization of collaborative systems according to specific technologies (Ellis, 2000).

Bannon & Schmidt (1989) suggest that too often technology is described with a focus on information flow between individuals. However, there must also be a consideration of the articulation work required to make the 'flow' possible. Collaborative  tools enable the 'flow"'of information and facilitate collaboration in distinct ways. Therefore a descriptive framework for describing how collaborative tools facilitate communication flows may be a useful heuristic for individuals planning CSCW. 

We believe that some aspects of the MoCA framework can also be used to describe collaborative software and systems -with some context adaptations. These similarities will be tested to see if well articulated CSCW can be matched to software tools suitable for the work through the notion of affordances. Users often maintain historically developed understandings of the utility of collaborative software and systems which are always evolving. Conole and Dyke (2004) argue that articulating and exposing the affordances of collaborative software enables users to understand how technologies can be most effectively used to support collaborative activities. So, we will also based our recommendation system in the user's perceptions.

The next section discusses the MoCA framework followed by a section on software affordances.
 
### 1. The MoCA framework 
While many interesting approaches to describing CSCW have emerged, these models lack of a connection with tool features. This scenario presents a challenge for users when selecting computer-based tools even when the specific type of work is properly described. The Model of Coordinated Action (MoCA), recently proposed by Lee and Paine (2015), is defined as a tool to describe complex collaborative situations. Recognizing that the landscape for collaborative technologies is rapidly changing and evolving, the model shifts our focus to describing the type of work that needs to facilitated. 

In total the MoCA framework consists of seven dimensions of coordinated action described below and illustrated in Figure 1. 

| ![alt text](https://depts.washington.edu/csclab/wordpress/wp-content/uploads/moca-key.png "Logo Title Text 1") |
|--------------------------------------------------------|
| Figure 1. The Model of Coordinated Action (MoCA) and its seven dimensions (Lee & Paine, 2015) |


*Synchronicity*: concerns a continuum of coordinated action ranging from being conducted synchronously -at the same time-, to asynchronously -at different times. This dimension further recognizes that coordinated actions can be both synchronous and asynchronous. 

*Physical Distribution*: this dimension describes whether coordinated actions are taking place in the same geographic location (collocated) or at different geographic locations (distributed). 

We recognize that predicting the Synchronicity and Physical distribution throughout a CSCW project can vary over time and information about these dimensions can be a challenge to identify discretely.

*Scale*: addresses the number of participants involved in the collaboration. Information provided by this dimension illustrate the complexity of the computer-based tool required as it is assumed that an increase in participants requires a more robust social arrangements and new practices. 

*Number of Communities of Practice*: focuses on the number of communities of practice represented in the coordinated action. This dimension recognize the importance of the different knowledge domains that may participate in the collaboration.

*Nascence*: this dimension discusses how unestablished (new) or established (old) a coordination action is. In another words, nascence aim to describe the familiarity level of participants with the collaborative task.

*Planned Permanence*: because it cannot be predicted how long a coordinated action will last, this dimension refers to planned or intended permanence of a coordinated action. 

*Turnover*: refers to the stability of the participant makeup of a given collaboration, or the rapidity of participants entering or leaving the collaboration. 

While some of the dimensions in the MoCA framework are familiar in CSCW, some of them are new. For instance, MoCA adds communities of practice as a descriptor for the social structure of participants, and information about the novelty of the work itself through the nascence dimension. Also, the framework includes participants' commitment or functional imperative to the work through Planned permanence and group dynamics and variability through the Turnover dimension.

Lee & Paine developed the MoCA framework to help researchers describe specific cases of CSCW. They argue that rather than viewing the mechanics of CSCW as uncharted territory, there are opportunities to identify patterns and similarity between projects, which may help us plan for future successful CSCW. Finally, the framework provides a rich vocabulary of concepts that can be used to describe the complex ecosystems of collaborative work, but as the other models lacks of a connection with tool features. 

### 2. Affordances of collaborative technologies
The notion of affordances is useful in defining how users interpret and make use of artifacts in the world. Salomon defines the term affordance as *“the perceived and actual properties of a thing, primarily those functional properties that determine just how the thing could possibly be used”* (Pea, 1993, p. 51). When considering emerging collaborative software and systems, affordances are not always evident to the user. As such it is not always clear how a tool can be used in a CSCW project to facilitate interaction.  

Bower (2015) has presented a model of collaborative learning technologies based upon a typological analysis of their affordances. The model was specifically developed to help educators select technologies that match their teaching and learning requirements by articulating what a tool can be used for. The typology also provides us with a framework for conceptualizing the broader collaborative software landscape. This exposition of individual technologies and their affordances can be useful in helping individuals select technologies that match their requirements as well as visualizing similar or related applications. See Figure 2 for a visual mind map of Bower’s typology. 

| ![alt text](http://www.weiterbildungsblog.de/wp-content/uploads/2015/02/bower_201502.jpg "Bower's typology") |
|--------------------------------------------------------|
| Figure 2. Bower’s (2015) typology of Web 2.0 collaborative technologies |


Our project will test the MoCA framework as a framework to link the articulation of CSCW to the affordances of collaborative software and systems. MoCA provides a framework for describing collaborative work which will be mapped to the affordances of collaborative technologies based on Bower's (2015) typology. 
 
### 3. The problem we are trying to solve 
Selecting the right tool to support collaborative work is one of the main problems teams face. There is a wide array of  collaboration tools to choose from and as such selecting an appropriate tool can be a overwhelming and a significant challenge. Olsen & Olsen (2014) argue that the success of a CSCW project is contingent on the appropriate selection of tools which meet the needs of the team. This idea is supported by Dudezert, Gurkan & Karoui (2010) when they suggest a technological perspective on virtual collaboration, which states that the efficiency of a team is based on the tool selected for collaboration. With such a wide range of options, it is recommended to establish a set of criteria that would be used for choosing the most appropriate tool for collaboration. 

About the described problem, Colace, De Santo, Moscato & Picariello (2015) suggested the use of a recommender system to solve the challenge of matching CSCW projects to appropriate tools. Indeed, historically recommender systems have emerged to aid decision support in an age of abundance. Common applications of recommender systems include films, books and music recommendations based on interests (e.g., Netflix, Amazon, Spotify). In another cases, the recommender system can suggest contacts based on social networks (e.g., Facebook, LinkedIn) or search results based on user profiles (e.g., Google). In general, recommender systems help users find the tools they need based on user's preferences and feedback playing an increasingly important role in our lives. 

We believe we can use the MoCA framework as a base to describe collaborative work scenarios. This will help us to develop a recommender system to match projects with computer-based applications which will be appropriate for the specific context.  

## OUR PROPOSAL: MatchMaker Application
Our proposal is to create a web application which will help users find appropriate applications for collaborative work depending on the nature of the work as described through the MoCA framework. Users will have a chance to describe the collaborative work they wish to facilitate and be presented with appropriate technologies most suited to the work. Users can also register applications they have used successfully to conduct collaborative work. This data will be used to further grow the database of applications and will be used to improve suggestions offered to users seeking appropriate application recommendations. As a result, our application database will store valuable user experiences and evolve over time as new applications become available.  

Although we will base our initial development on the MoCA framework, we will follow an iterative validation process based on our own experiences as tool users. Also, we will include a validation process -survey- with potential users. These evaluation will test if extra features or dimensions not considered in the MoCA framework are required to our purpose. In the next subsection we describe our process in more detail.
 
### 1. Strategy and Methods 

MatchMaker Application is a recommendation system that intends to help users select appropritate collaborative tools based on the articualtion of their work through the MoCA framework. In particular, the application allows any user to describe the type of collaborative work to be done and our application suggests appropriate tools. This function is identified as the first user requirement: *UR1: Searching for an application*. Additionally, MatchMaker Application allows users to register collaborative computer-based tools in the system database, as a mechanism to help populate the recommendation system. Similarly, this function is identified as the second user requirement: *UR2: Registering an application*. Figure # and # show a preliminary interface mockup for UR1 and UR2 respectively.

| <img src="https://raw.githubusercontent.com/maryi/CSCW-Project/master/Images/Find%20app1.3.png" width="300">                 |
|--------------------------------------------------------|
| Figure 1. Preliminary interface Mockup for UR1: Searching for an application |


| <img src="https://raw.githubusercontent.com/maryi/CSCW-Project/master/Images/Register%20app1.3.png" width="300">                 |
|--------------------------------------------------------|
| Figure 2. Preliminary interface Mockup for UR2: Registering an application |

In order to implement the listed requirements, we defined a set of criteria to help us classify our information. The intial criteria began with the elements of the MoCA framework. As we consdiered the criteria needed to operationalize the MatchMaker Application, we noticed that the criteria used to define collaborative work is different from the criteria to identify tool features.

These criteria have been designed for each requirement of the system, searching for an application and registering an application. We call these *-descriptors-* as they are used to describe instances of collaborative work and tools for colalborative work. 

We identified that not all descriptors are suitable for our two user requirements. The first requirement needs the user to describe the nature of the collaboration s/he intent to support, so the descriptors should allow to identify the characteristics of the work to be done. Meanwhile, in UR2 the application requires the user to describe the features of a tool. Thus, descriptors have to be feature oriented in order to describe the capabilities of a particular tool. As a result, we divided the initial list in two, creating two sets of descriptors, one for UR1 and the other for UR2.

Our intent was to use the MoCA framework as a base, so that it would be used to describe both collaborative work and the features of collaborative tools. However we discovered that we would need to consider some additional fields to describe collaborative tools. This resulted in some interesting conversations faciliated through Github as we wrestled with developing our lists. We discussed the need for a descriptor of what a tool actually does defined as 'purpose' ([See discussion on Github](https://github.com/maryi/CSCW-Project/issues/7 "See discussion on Github")). Bower's(2015) typology of collaborative software provides a base to populate this descriptor.  

Also in terms of decribing collaborative tools we dicussed the challenge of labeling a tool synchronous or asynchronous 
([See discussion on Github](https://github.com/maryi/CSCW-Project/issues/18 "See discussion on Github")). Using examples of tools we were using at the time to facilitate our own CSCW such as Github and Slack, we had a rich discussion about whether these tools were synchronous or asynchronous. Some felt that synchonous implied real-time voice and video communication, others felt that because the afformentioned tools are increasingly mobile and provide real-time notification and opportunities to respond, they could be labeled synchonous as well. These discussions helped form the basis of our descriptors articulated in the next section.   

#### 1.1 Explanation of user requirements
**UR1: Searching for an application:** Any user searching for an application to support collaborative activities should describe the nature of the collaborative work to the system. Consequently, the descriptors used for this requirement are selected from the MoCA framework, along with *purpose* as a complementary one. Note that the vocabulary of the MoCA dimensions were adapted to be more colloquial in the web page for user friendliness. The set of descriptors selected to characterize collaborative work is presented in table 1. Each descriptor is described with the name, possible options and the selection type offered to the user in the web interface. The rational about the options offered will be describe in the next subsection.


|                Name               |                                  Possible options                                 |  Selection type |
|:---------------------------------:|:---------------------------------------------------------------------------------:|:---------------:|
| Scale                             | 2,5,10,N                                                                          | Single choice   |
| Physical Distribution             | Colocated / distributed                                                           | Single choice   |
| Synchronicity                     | Completely async, supports for both, completely sync                              | Single choice   |
| Planned Permanence                | Couple of days/ 1 month / 6 months / More time                                    | Single choice   |
| Turnover                          | Low, Medium, High                                                                 | Single choice   |
| Nascence                          | Routine, Most of the tasks are routine, Most of the tasks will be new, Developing | Single choice   |
| Domains (Communities of Practice) | Complete list in [Appendix 1](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%201%20-%20Domains%20values%20based%20on%20JACS.md)                                                       | Multiple choice |
| Purpose                           | Complete list in [Appendix 2](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%202%20-%20Purpose%20values.md)                                                       | Multiple choice |

| Table 1. Descriptors for collaborative work |



**UR2: Registering an application:** In the case when the user wants to register an application the descriptors will focus on possible tool features. Our MatchMaker Application will later analyze the features and determine the level of support each tool can provide for each collaboration descriptor. Table 2 shows the set of descriptors used for tool features, along with name, possible values and the selection type offered to the user in the web interface. More details about descriptors definitions and options offered will be presented in the next subsection.

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
| Service type                      | Free online open access, Free online account, Paid online account, Subscription service, Freemium (30 trial), Software download free, Software download paid | Multiple choice |
| Content privacy                   | Private channels/ Open messages to registered users / Open messages to general public                                                            | Multiple choice |
| Hierarchy                         | All users same role, Role based, Strict hierarchy                                                                                                | Multiple choice |
| Tool purpose                      | Complete list in [Appendix 2](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%202%20-%20Purpose%20values.md)         | Multiple choice |
| Compatibility                     | Free text                                                                                                                                        | -               |
| Modality                          | audio communication, visual communication, document  communication, data communication, visualization communication, short message communication | Multiple choice |

| Table 2. Descriptors for tool features |




#### 1.2 Descriptors for tool features
Tool descriptors were designed with the purpose to collect valuable information about their support to collaborative activities. This information should be used later for the recommendation system. Details about descriptors and our selection is presented below. The possible values selected for each descriptor in most of the cases are based on personal experience of the researchers, when this is not the criteria we provide more detail about our sources.

*Name*: used as an identifier of the tool.

*Creator link*: link to the web resource where the tool can be accessed or downloaded.

*Synchronicity*: described the tool support for the different modes of work. More details are included in the next subsection.

*Awareness mechanisms*: list the possible features that help with individual and team awareness.

*Scale*: Describes the maximum number of participants supported by the tool.

*Domains*: List the number of knowledge domains for which the tool can be used for.

*Nascence*: Described the level of novelty or routine work that can be done in the tool. More reflexions about this descriptor in the next subsection.

*Learning curve*: provides information about the effort required to use the tool.

*Service type*: describes the business model of the tool developers.

*Hierarchy*: Brings information of the possible role structure in the tool.

*Tool purpose*: illustrates the main purpose of the tool.

*Compatibility*: provides information about other tools that can be integrated with (e.g., Slack has integrations with Twitter) or tools that are commonly used together as complement (e.g., Github and Trello)

*Modality*: Based on Nickerson's (1997) this descriptor provides information about the nature of communication within the tool.
contribution of the modal dimension, we added a few other options to the dimension including audio communication, visual communication, visualization communication, short message communication.


#### 1.3 Descriptors for collaborative work
The set of descriptors used to characterize collaborative work, as illustrated by table #, is mainly composed by the dimensions proposed by the MoCA framework with the addition of the descriptor *purpose*. We found that although MoCA represented a good base to describe collaborative work, the framework presents a high level description for each dimension maybe due to the fact that is has never been applied before to a real situation. Accordingly, the first challenge is to create a less abstract version of MoCA with more applicable definitions for its dimensions. Below, we describe the result of our analysis. 

In addition, we found that the two set of descriptors differ in nature and often they do not present a linear correspondence. For that reason, we developed a connection, illustrated in table 3, between the descriptors of the work and the descriptors of the applications. For example, when a user in the physical distribution descriptor selects 'distributed team' MatchMaker Application looks for applications with multiple awareness mechanisms. Also, it should be noted that not all descriptors are different, we found that some of them are applicable in both contexts, to describe work and to describe a tool, so they were left equal in both cases. For instance, the scale dimension in MoCA has a linear connection with the scalability of a tool.

| Descriptors for collaborative work | Descriptors for applications      |
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

Finally, in another cases we found that more than one descriptor in the application could contribute to identify potential benefits for one descriptor in the collaborative work. Such was the case with the descriptor of work Planned permanence where *service type* and *learning curve* were both selected as application descriptors. The table # shows how the two set of descriptors are connected and more details about our rational for such connection is presented here.

*Scale*: similar to the original version, represents an approximate number of people involved in the collaborative work and that should have access to the common artifacts through computer-based tools. The possible values selected represent the most popular accommodations: 2, less or equal to 5, less or equal to 10, and more than 10 participants. This descriptor is paired with another one of the same name in the tool-feature descriptor set, where the possible values represent the maximum number of participants supported by the tool.

*Physical Distribution*: this descriptor provides information about the location of participants, thus the possible values are distributed or collocated. 
About the connection with tool-feature descriptors, based on the literature covered in the class (e.g., Olson & Olson, 2014) we know collaboration in a distributed team is challenging, so we considered that our application should make recommendations in this dimension based on the amount of *awareness mechanisms* provided by the tools.

*Synchronicity*: represents the nature of interactions between participants. In both set of descriptors has the same name and same options with slight differences based on the context. This descriptor can take three values:
 
 * Completely asynchronous: describes collaboration that does not require participants to be actively working on the coordinated action in order to make progress on the work. In terms of the tool, this means that participants are not required to be in the tool to make progress on the work (e.g., email systems).
 * Completely synchronous: collaboration where participation of all or a significant number of team members is required to work simultaneously in order to make progress in the coordinated action. In the context of tool features, this means that participation of other team member is required to access the tool (e.g., video-conference).
 * Both: the collaborative action requires asynchronous and synchronous work. Therefore, the computer-based tool should provide support for both modes.
 
*Planned Permanence*: this descriptor provides information about the length of the collaboration. In this case, we defined as possible options: couple of days, less than or equal to 1 month, less than or equal to 6 months, and more time.  The rational we followed to suggest an appropriate tool given this information is based on two assumptions: 1) the longer the collaboration participants are more willing to spend time learning the complexities of a tool and 2) they are more open to pay for software or install it in their computers. Consequently, this descriptor is paired with *learning curve* and *service type* in the tool descriptor.

*Turnover*: represents the rapidity with which group members enter or leave from the collaboration. We defined three possible options: 

 * Low: for closed group and private collaboration
 * Medium: closed group, but with possibility to have private or open collaboration
 * High: open group, open collaboration to general public

In order to bring support for this descriptor, we selected *content privacy* and *hierarchy* from the tool-features set. This decision was made on the bases that both, by describing the possibilities of information visibility and role assignation, define the level of turnover in the work.

*Nascence*: describes the level of familiarity of participants with respect to the coordinated action. Although we agree it is an important descriptor for collaborative work, we failed to see the way it could get benefit from any particular tool feature; exercise that was possible with the other MoCA dimensions. In our solution, we kept the descriptor with same definition in both sets and possible values as:
 
 * Routine: support for familiar tasks
 * Most of the tasks are routine
 * Most of the tasks will be new
 * Developing: support for evolving tasks

*Domains*: This descriptor is related with the Number of Communities of Practice dimension in the MoCA framework. The original dimension cares about the number of communities of practice represented in the coordinated action. However, while we think the question about 'how many?' is important we think another question 'which ones?' is more relevant to our purpose. In fact, the user by selecting which communities are included in the collaboration is also providing information about the quantity. 

This decision was made considering the usefulness of the information provided by the user. If the user indicates collaboration between two communities, that information is not relevant to recommend any tool support. But if the user indicated for example engineering and general public, our application can have an additional filter to select potentially good tools.
This descriptor has a linear correspondence with the one of the same name in the tool-feature descriptor set where also the same possible values apply.

In particular, the selection of possible values for this descriptor was based on the high level categories of JACS ([Joint Academic Coding System](https://www.hesa.ac.uk/index.php?option=com_content&view=article&id=158 "JACS")). For a complete list of possible values in this descriptor refer to [APPENDIX 1](https://github.com/maryi/CSCW-Project/blob/master/Project%20report/APPENDIX%201%20-%20Domains%20values%20based%20on%20JACS.md)

*Purpose*: This descriptor was added to complete the definition of the coordinated action. We wanted to be specific about the kind of collaboration described by the user. We based our selection of possible values in the typology describe by Bower (2015) as technologies for collaboration.

### 2. Technical specifications

Our project website will be hosted using the Google cloud computing platform. With this choice we ensure high availability of the service for potential users. The website hosting our application will be done with HTML and PHP. All the applications for the website will be stored in a database using MySQL, an open source database (https://www.mysql.com/why-mysql/). The database will also be hosted using the Google cloud computing platform. We chose the Google platform for hosting for two reasons, it's a free service and hosting them both on the same infrastructure makes it easier to integrate the website and database together.

Currently our website can be accessed from http://turorial1-1120.appspot.com/. At the moment we are about 50% done the work on the website and database. We have completed a rough version of what the registering an app page will look like and it currently adds inputted app information into the database. However we still need to update the registration page selection fields to reflect the latest version of our application descriptors. We also still have to make a homepage which should be a fairly simple page with just 2 links to either search for an app or to register an app. Lastly we have to create the webpage for searching for an application which also shouldn't take up much time. The biggest technical challenge ahead of us is deciding how to rank and display the search results when looking for an app. We have already begun discussions as a group for how we will do this but nothing definitive has been decided so far.
 
### 3. Roles and contributions 
Based on a list of strengths and personal preferences, we subdivided our team in two. 
Technical team (Dustin, Eli and Maryi): Members in this subdivision identified themselves with programming experience and declare to be comfortable with the project technical requirements. This team will be responsible for selecting the technical tools and resources, and developing the application for the project.  

Research team (Michael and Krista): Members of this team will be responsible for the production and edition of the project documentation. They will also be the leaders of the research tasks required for the project. 
 
### 4. Expected results  
We expect to create an application that accurately suggests appropriate applications for collaborative work to users. In a world where a new application is released nearly every minute, we expect to bring together users and applications that support collaborative work.  

Initially, we will try to classify applications using the MoCA framework however, we expect the end result of our classification to be an amalgamation of the MoCA dimensions as well as additional dimensions to increase the accuracy of classifying applications.

From the technical end we expect that our website will be fully functional and easy for users to use. We expect that the search function will return a reasonable recommendation of collaborative tools. Although at this time the search function is what we are most unsure of.
 
## LIMITATIONS
Our two biggest limitations in this endeavour are the newness of the MoCA framework and time.  
We are basing our work on the MoCA framework which is a novel framework for describing CSCW, so we can be limiting our development by choosing this approach. The MoCA framework was designed to give a common way of describing collaborative work and was not designed specifically for classification.  Due to this we expect to run into challenges using it for classification. To overcome this limitation, we might have to add or enhance dimensions from the MoCA framework to obtain a better classification system for collaborative applications. 

In addition to the MoCA framework we are limited by time, after the submission of this proposal we will only have 6 weeks to complete our application. This means that we may not be able to implement all the features we want and will have to focus on the essential features first. Also ideally when testing our finished product, we would want to iteratively get user feedback and tweak our design based on user feedback. However because of time we expect to only be able to get one round of user feedback on our design which may result in our design not fitting the needs of all the users who will want to use our application. 

Now that we have begun work designing our website it is clear that our search recommendation algorithm will also be a limitation. Ideally we would want to only recommend apps that strictly satisfy the requirements given by the user. However due to time constraints and the difficulty of discovering such an algorithm we will have to make due with recommending apps that come close to meeting the user requirements. It is also difficult to recommend the perfect app because we will only have somewhere between 50 or 100 apps registered by the by the team this project is due.
 
## FUTURE WORK 
We sense that connecting CSCW teams to the best tools for facilitating their work will remain a challenge for many years to come. We hope that our project demonstrates that articulating collaborative work using the MoCA framework can help connect users to tools which facilitate successful CSCW. Our work should also add to the awareness and development of the MoCA framework. Our intent is that the MatchMaker Application may become a place where users can continue registering apps into the future.  Furthermore, the MatchMaker Application data structures which match the MoCA framework to a typology of collaborative software will be made available should developers wish to further adapt and enhance the model.   
 
### ACKNOWLEDGMENTS 
We would like to thank the students and leaders of our CSCW course at the University of Victoria for their thoughtful feedback while presenting our research proposal.   
 
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
