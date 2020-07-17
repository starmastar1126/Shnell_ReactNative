/* eslint-disable no-trailing-spaces */
/* eslint-disable prettier/prettier */
/* eslint-disable react-native/no-inline-styles */
import React from 'react';
import {View, Text,Image,Picker,TextInput,Button,SafeAreaView,FlatList,ListView ,TouchableOpacity,Dimensions,Platform,
  ScrollView, StyleSheet} from 'react-native';






import axios from 'axios';


import { useNavigation } from '@react-navigation/native';



export default class StartupList extends React.Component {



constructor(props) {

//console.log(props.navigation);

  super(props);
  this.state = {

    ProjectsList: [],

  };
}


componentDidMount() {

    axios.get('https://api.zuzamen.net/api/getprojects')
    .then(

      response => this.setState({ ProjectsList: response.data.data.original })
    
      );

}

PreviousScreen = () => {
  console.log('dfdfd');
 // this.props.navigation.navigate('StartupDetails');
};


onSelectScreen= (id) => {
  //console.log(id);
  console.log("Chala id wala")
  this.props.navigation.navigate('StartupDetails', {data: id} );
};






renderProjects()
{



return this.state.ProjectsList.map( ProjectList =>  
  
  <TouchableOpacity onPress={() => {
      this.onSelectScreen(ProjectList.projectName)
    }}> 



<View style={[styles.container]}>
      <View style={styles.cardBody}>
        <View style={styles.bodyContent}>
          <Text style={styles.titleStyle}>{ProjectList.projectName}</Text>
          <Text style={styles.subtitleStyle}>Min Invest: {ProjectList.min_invest} </Text>
        </View>
        

        <Image
         
         source={{
          uri: ProjectList.logo_url
        }}


          style={styles.cardItemImagePlace}
        ></Image>



      </View>
      <View style={styles.actionBody}>
        
       
      </View>
    </View>




  </TouchableOpacity>
  
  
  
  );

  
}





  render() {


    return (


     <View>
       
       <Text
            style={{
              fontSize: 20,
              marginTop: 35,
              justifyContent: 'center',
              alignItems: 'center',
              fontWeight: 'bold',
              textAlign: 'center',
            }}>
            StartUp List
          </Text>

       
          {this.renderProjects()}
       
      
          </View>


    );


    


    

  }
}

const styles = StyleSheet.create({
  container: {
    backgroundColor: "#FFF",
    flexWrap: "nowrap",
    elevation: 3,
    borderRadius: 2,
    borderColor: "#CCC",
    borderWidth: 1,
    shadowOffset: {
      height: 2,
      width: -2
    },
    shadowColor: "#000",
    shadowOpacity: 0.1,
    shadowRadius: 1.5,
    overflow: "hidden"
  },
  cardBody: {
    flexDirection: "row",
    justifyContent: "space-between"
  },
  bodyContent: {
    flex: 1,
    padding: 16,
    paddingTop: 24
  },
  titleStyle: {
    color: "#000",
    paddingBottom: 12,
    fontSize: 24,
    fontFamily: "roboto-regular"
  },
  subtitleStyle: {
    color: "#000",
    opacity: 0.5,
    fontSize: 14,
    fontFamily: "roboto-regular",
    lineHeight: 16
  },
  cardItemImagePlace: {
    width: 80,
    height: 80,
    backgroundColor: "#ccc",
    margin: 16
  },
  actionBody: {
    flexDirection: "row",
    padding: 8
  },
  actionButton1: {
    height: 36,
    padding: 8
  },
  actionText1: {
    color: "#000",
    opacity: 0.9,
    fontSize: 14
  },
  actionButton2: {
    height: 36,
    padding: 8
  },
  actionText2: {
    color: "#000",
    opacity: 0.9,
    fontSize: 14
  }
});


