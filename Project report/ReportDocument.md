#Match Maker application – A web service based on the MoCA framework

##### *ABSTRACT* 
Computer supported collaborative work (CSCW) is increasingly becoming a significant component of living and working in modern times. Computer mediated collaborations occur in all aspects of our personal and professional lives. Furthermore, the technologies which can be used to facilitate CSCW are diverse and ever changing. Due to the breadth of options, it is a challenge for individuals selecting appropriate tools to support collaborative work. As specific tools are often designed to support specific collaborative work we believe that a system for helping people match tools to types of work is needed.      

The Model of Coordinated Action (MoCA) framework provides a descriptive lens for describing the complex nature of collaborative work with the goal of helping us understand the collaborative technologies which best facilitate the work. Our project explores whether having individuals articulate the type of work to be facilitated using the dimensions of the MoCA framework can surface appropriate technologies for facilitating that work. 
 
**Author Keywords**: Collaborative work; Model of Coordinated Action, MoCA Framework CSCW; Software affordances 
 
**ACM Classification Keywords**: Design, Experimentation, Theory 
 
##### INTRODUCTION 
The study of CSCW is concerned with supporting multiple individuals working together mediated by computer systems and software. One of the recurring challenges in CSCW is matching the appropriate tools to the type of work to be facilitated. Various ways of articulating CSCW have emerged including Johansen's (1988) time-space matrix which described collaborative work in terms of location and synchronicity. However we argue that for any person planning a CSCW project, the vast availability of potental tools is overwhelming and a challenge to navigate.   

The appropriate selection of a suite of technologies which meets the needs of a group can have a great impact on the success of the collaboration (Olsen & Olsen, 2014). Technologies are often selected based on past experiences or accessibility. The selection of tools to support CSCW may occur without much consideration, and this presents a risk to success. By attempting to articulate the elements of the collaborative work which will be undertaken, a more thoughtful selection of appropriate tools may occur. 

Complicating this further is the wide array of collaborative technologies now available via the internet. Many collaborative technologies provide inherent affordances which facilitate types of collaborative activity. The challenge for users engaging in collaborative work, is matching the appropriate technology to their specific needs.

We believe the MoCA framework provides a useful lens for describing collaborative work. Our intent is to extend the MoCA framework to facilitate the next steps in decision support for choosing computer systems and software which support specific work scenarios.  As such, this study is driven by the following research questions:  
 
Can articulation of collaborative work using the MoCA framework be used to assist in the identification of appropriate collaborative systems and software for facilitating collaborative work? 
 
Are there further descriptive dimensions useful in describing collaborative work that should the added to the MoCA framework? 
##### BACKGROUND 
This section outlines the MoCA framework and its seven dimensions, the affordance of collaborative technologies, and the problem we are trying to solve using our web application. 

Bannon & Schmidt (1989) suggest that too often technology is built with a focus on information flow between individuals. There must also be a consideration of the articulation work required to make the “flow” possible.

 
#### 1. The MoCA framework 
Introduced by Lee and Paine (2015), the Model of Coordinated Action (MoCA) framework is introduced as a tool to describe complex collaborative situations. The MoCA framework consists of seven dimensions of coordinated action described below. 
Synchronicity: concerns a continuum of coordinated action ranging from being conducted at the synchronously, at the same time, to asynchronously, at different times. It allows coordinated actions to be both synchronous and asynchronous however it does not account for predictability of time. 

Physical Distribution: whether coordinated actions are taking place in the same geographic location or at different geographIc locations. It does not take into account the predictability of place. 
Scale: addresses the number of participants involved in the collaboration. An increase in participants requires more complicated social arrangements and new practices. 
Number of Communities of Practice: focuses on the number of communities of practice represented in the coordinated action. 
Nascence: discusses how un-established (new) or established (old) a coordination action is. 
Planned Permanence: refers to planned or intended permanence of a coordinated action because it cannot be predicted how long a coordinated action will last. 
Turnover: refers to the stability of the participant makeup of a given collaboration, or the rapidity of participants entering or leaving the collaboration. 
MoCA has been offered as a model for describing CSCW, see Figure 1 for a visual representation. 

Image 
Figure 1 The Model of Coordinated Action (MoCA) and its seven dimensions (Lee & Paine, 2015). 
 
Affordances of collaborative technologies 
The notion of affordances is useful in defining how users interpret and make use of artifacts in the world. Salomon defines the term affordance as “the perceived and actual properties of a thing, primarily those functional properties that determine just how the thing could possibly be used” (Pea, 1993, p. 51).   

When considering emerging collaborative software and systems, affordances are not always evident to the user.  Users often maintain historically developed understandings of collaborative software and systems which are always evolving.  Conole and Dyke (2004) argue that articulating and exposing the affordances of collaborative software enables users to understand how technologies can be most effectively used to support collaborative activities. 

Bower (2015) has presented a model of collaborative learning technologies based upon a typological analysis of their affordances. The typology provides users with a framework for conceptualizing the collaborative software landscape. This exposition of individual technologies and their affordances can be useful in helping individuals select technologies that match their requirements. See Figure 2 for a visual mind map of Bower’s typology. 

Image 
Figure 2 Bower’s (2005) typology of Web 2.0 collaborative technologies 

Our project will test the MoCA framework as a lens for exposing the affordances of collaborative software and systems. MoCA provides a framework for describing collaborative work and will be mapped to the affordances of collaborative technologies. 
 
#### 2. The problem we are trying to solve 
Selecting the right tool for collaborative work is one of the main problems teams face. There are too many collaboration tools to choose from and many people are having a difficult time or feel overwhelmed trying to find a tool that will best meet their needs. Dudezert, Gurkan & Karoui (2010), suggests a technological perspective on virtual collaboration, which states that the efficiency of a team is based on the tool selected for collaboration. With such a wide range of options, it is recommended to establish a set of criteria that would be used for choosing the most appropriate tool for collaboration. In addition, Colace, De Santo, Moscato & Picariello (2015) suggest using a recommender system to solve this problem. Recommender systems help users find the tools they need based on users’ preferences and feedback and have been becoming an increasingly important role in our lives. 

##### OUR PROPOSAL: MATCH MAKER APP 
Our proposal is to create a web application, that based on the MoCA framework, will help users find appropriate applications for collaborative work depending on the nature of the work. Our application will also look to benefit from the knowledge on the people and will allow users to register information about applications they have used for collaboration. As a result, our information database will store valuable user experiences and our application will aim to make more accurate recommendations to new users. 

Although we will base our initial development on the MoCA framework, we will follow an iterative validation process with potential users to evaluate what extra features or dimensions not considered in the MoCA are required to our purpose. 
Below are two figures outlining how we will take user input for registering an application as well as for describing a collaborative project that a user wants to find applications for. 

![Image of FindApp](https://github.com/maryi/CSCW-Project/blob/master/Project%20proposal/Mockups/Find%20app.png)
Figure 3 A preliminary version of our project description page 
 
![Image of FindApp](https://github.com/maryi/CSCW-Project/blob/master/Project%20proposal/Mockups/Register%20app.png)
Figure 4 A preliminary version of our register an application page 
 
#### 1. Technical specifications
Our project website will be hosted on GitHub. With this choice we ensure high availability of the service for potential users. The website hosting our application will be done with Java. All the applications for the website will be stored in a database using MySQL, an open source database (https://www.mysql.com/why-mysql/). 

For the collaborative work required to build our application we will be using the GitHub issues and milestones features. We will also be using the text based chat tool Slack as a central point of communication. Blackboard Collaborate will be used when it is necessary for us to have synchronous voice communication from different locations.   
 
#### 2. Strategy and Methods 
After reviewing the literature, we will aim to develop the software application. To get this done we are breaking the application up into different tasks, One of us will focus on implementing the website and another on implementing the database. We have already come up with a preliminary design for the website consisting of a page for searching for applications as well as a page for registering different collaborative apps. While the website and database are being set up Maryi will be working on the ethics document. Once the ethics document, website, and database are all setup we will begin surveying potential users to see how they react to our design. once user surveying is complete we will analyze the user feedback and tweak our design to remove the problems observed by users. If we have time we might repeat the surveying and feedback analysis phase to further improve our application design. Lastly we will formalize and reflect on our findings in a final report. 
 
#### 3. Roles and contributions 
Based on a list of strengths and personal preferences, we subdivided our team in two. 
Technical team (Dustin, Eli and Maryi): Members in this subdivision identified themselves with programming experience and declare to be comfortable with the project technical requirements. This team will be responsible for selecting the technical tools and resources, and developing the application for the project.  

Research team (Michael and Krista): Members of this team will be responsible for the production and edition of the project documentation. They will also be the leaders of the research tasks required for the project. 
 
#### 4. Expected results  
We expect to create an application that accurately suggests appropriate applications for collaborative work to users. In a world where a new application is released nearly every minute, we expect to bring together users and applications that support collaborative work.  

Initially, we will try to classify applications using the MoCA framework however, we expect the end result of our classification to be an amalgamation of the MoCA dimensions as well as additional dimensions to increase the accuracy of classifying applications. 
 
##### LIMITATIONS
Our two biggest limitations in this endeavour are the newness of the MoCA framework and time.  
We are basing our work on the MoCA framework which is a novel framework for describing CSCW, so we can be limiting our development by choosing this approach. The MoCA framework was designed to give a common way of describing collaborative work and was not designed specifically for classification.  Due to this we expect to run into challenges using it for classification. To overcome this limitation, we might have to add or enhance dimensions from the MoCA framework to obtain a better classification system for collaborative applications. 

In addition to the MoCA framework we are limited by time, after the submission of this proposal we will only have 6 weeks to complete our application. This means that we may not be able to implement all the features we want and will have to focus on the essential features first. Also ideally when testing our finished product, we would want to iteratively get user feedback and tweak our design based on user feedback. However because of time we expect to only be able to get one round of user feedback on our design which may result in our design not fitting the needs of all the users who will want to use our application. 
 
##### FUTURE WORK 
We sense that connecting CSCW teams to the best tools for facilitating their work will remain a challenge for many years to come. We hope that our project demonstrates that articulating collaborative work using the MoCA framework can help connect users to tools which facilitate successful CSCW. Our work should also add to the awareness and development of the MoCA framework. Our intent is that the Matchmaker App may become a place where users can continue registering apps into the future.  Furthermore, the Matchmaker App’s data structures which match the MoCA framework to a typology of collaborative software will be made available should developers wish to further adapt and enhance the model.   
 
##### ACKNOWLEDGMENTS 
We would like to thank the students and leaders of our CSCW course at the University of Victoria for their thoughtful feedback while presenting our research proposal.   
 
##### REFERENCES 
Bannon, L. J., & Schmidt, K. (1989). CSCW-four characters in search of a context. DAIMI Report Series, 18 (289).

Bower, M. (2015), Deriving a typology of Web 2.0 learning technologies. British Journal of Educational Technology. doi: 10.1111/bjet.12344 
 
Colace, F., De Santo, M., Greco, L., Moscato, V., Picariello, A. (2015). A Collaborative User-Centered Framework for Recommending Items in Online Social Networks. Computers in Human Behaviour. doi:10.1016/j.chb.2014.12.011 
 
Conole, G., & Dyke, M. (2004). What are the affordances of information and communication technologies?. Association for Learning Technology Journal, 12(2), 113-124. 
 
Conole, G., Dyke, M., Oliver, M., & Seale, J. (2004). Mapping pedagogy and tools for effective learning design. Computers & Education, 43(1), 17-33. 
 
Dudezert. A., Gurkan, A., Karoui, M. (2010). Virtual Team Collaboration: A Review of Literature and Perspectives. Proceedings of the Sixteenth Americas Conference on Information Systems, Lima, Peru; August 12-15, 2010, 2010, Lima, Peru. 

Johansen, R. (1988). Groupware: Computer support for business teams. The Free Press. New York, NY.
 
Lee, C. P., & Paine, D. (2015). From The Matrix to a Model of Coordinated Action (MoCA): A Conceptual Framework of and for CSCW. In Proceedings of the 18th ACM Conference on Computer Supported Cooperative Work & Social Computing (pp. 179-194). ACM. 
Olsen, J. & Olsen, G. (2014). How To Make Distance Work Work. Interactions, XXI.2 March + April 2014, pg. 28. Association for Computing Machinery. 
 
Pea, R. (1993). Practices of distributed intelligence and designs for education.  In Salomon, ed., Distributed cognitions: Psychological and educational considerations. Cambridge University Press. 
