/* eslint-disable no-trailing-spaces */
/* eslint-disable prettier/prettier */
/* eslint-disable react-native/no-inline-styles */
import React from 'react';
import {View, Text,Image,Picker,TextInput,Button,SafeAreaView,FlatList,ListView ,TouchableOpacity,
  ScrollView, StyleSheet} from 'react-native';
import CheckBox from 'react-native-check-box';


import { useNavigation } from '@react-navigation/native';

import axios from 'axios';
export default class StartupDetails extends React.Component {


constructor(props) {
  super(props);

  this.state = {

    ProjectsDetails: [],
    passProjectName: '',

  };


}

componentDidMount() {
  
  const { data  } = this.props.route.params;
  this.setState( { passProjectName: data });

/* 
  const formData = new FormData();
  formData.append('id', this.state.passProjectName);
 
  axios({
    url: 'http://localhost:5000/api/hello',
    method: 'POST',
    data: formData,    
  }) .then(function (response) {
    console.log("response :", response);
    response => this.setState({ ProjectsDetails: response.data.data.original })
})
.catch(function (error) {
    console.log("error from image :");
}); */
   

}



renderProjects()
{
  return this.state.ProjectsList.map( ProjectList =>  <Text style={{fontSize: 20,borderWidth:1,
    borderRadius:2,
    borderColor:'#ddd',
    borderBottomWidth:0,
    shadowColor: '#000',
    shadowOffset: { width:0 ,height:2},
    shadowRadius: 2,
    elevation: 1,
    marginLeft: 5,
    marginRight: 5,marginBottom:10}}>{ProjectList.name}</Text>  );
}



  render() {


    return (

<View>
<View>
        <Text
            style={{
              fontSize: 20,
              justifyContent: 'center',
              alignItems: 'center',
              fontWeight: 'bold',
              textAlign: 'center',
              marginBottom: 40,
              marginTop:5
            }}>
    Startup Details
  </Text>
</View>

      <View >
        
        
    
          <Image
            style={{height: 200, resizeMode: 'contain',marginLeft: 70,marginBottom:20}}
            source={require('../images/logo.png')}
          />
    
  
          
<Text style={{fontSize:18}} > Name: 
{
  this.state.ProjectsDetails.map( ProjectsDetail => ProjectsDetail.name)
}
</Text>


<Text style={{fontSize:18}} > Amount Needed:       
{
  this.state.ProjectsDetails.map( ProjectsDetail => ProjectsDetail.amountneeded)
}
</Text>


<Text style={{fontSize:18}} > Website:       
{
  this.state.ProjectsDetails.map( ProjectsDetail => ProjectsDetail.website)
}
</Text>

<View style={styles.buttonStyleContainer}>


<Button
          title="Invest"
          color="#f194ff"
          onPress={() => this.props.navigation.navigate('UserRegistration')}
        />


           
              <Button
                 title={"Affiliate"}
                 onPress={() => this.props.navigation.navigate('UserRegistration')}
             color="green"
           />

         </View>




      </View>
      </View>
    );
  }
}


const styles = StyleSheet.create({

buttonStyleContainer: {
marginTop:40,
flexDirection: 'row',
justifyContent: 'space-between',
marginLeft:40,
marginRight:40,
},

buttonStyle:{

width:200,

}

});