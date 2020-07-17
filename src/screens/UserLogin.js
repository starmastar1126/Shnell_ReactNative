/* eslint-disable no-trailing-spaces */
/* eslint-disable prettier/prettier */
/* eslint-disable react-native/no-inline-styles */
import _ from 'lodash';
import React from 'react';
import {View, Text,Image,Picker,TextInput,Button,SafeAreaView,FlatList,ListView ,TouchableOpacity, ScrollView, StyleSheet} from 'react-native';
import CheckBox from 'react-native-check-box';

//import { useNavigation } from '@react-navigation/native';
import { CusButton} from '../components/common/CusButton';
import { Card} from '../components/common/Card';
import { CardSection} from '../components/common/CardSection';
import { Header } from '../components/common/Header';
import { Input } from '../components/common/Input';
import { Spinner } from '../components/common/Spinner';

import RadioGroup from 'react-native-radio-buttons-group';

import axios from 'axios';

import AsyncStorage from '@react-native-community/async-storage';

import * as RootNavigation from '../navigationRef';

export default class UserLogin extends React.Component {


constructor(props) {

//console.log(props.navigation);

  super(props);
  this.state = {

  userdata:null, uid:'',  email: '', password:'', phone:'',  loading: false,  loggedIn: false, 
  selage: 'Over 18 Years Old', firstname: '' , lastname:'', error:'', token: null,

    agedata: [
        {
            label: 'Over 18 Years Old',
        },
        {
            label: 'under 18 Years Old',            
        },       
    ],

   
  };
}


componentDidMount() {


  this.setState({ email: 'Yes@me.com', password:'12345678' });
  


  AsyncStorage.getItem('Token')
  .then(value => {
      if (value !== null || value !== '') {
        this.setState({token: value})
      }
      
    // console.log('AAbbb',value);
    if ( this.state.token !== null)
    {
     // this.props.navigation.navigate('HomePage');
    }
  })
  .done();


//console.log('token',this.state.token);


//token        

}


onSelectScreen= (id) => {
  //console.log(id);
  this.props.navigation.navigate('StartupDetails', {data: id} );
};


onButtonPress() {

  

   this.setState({ error: '', loading: true , confirmResult: null,});

   const formData = new FormData();

   formData.append('email', this.state.email);
   formData.append('password', this.state.password);
  
   axios({
     url: 'https://api.zuzamen.net/api/login',
     method: 'POST',
     data: formData,    
   }) .then(function (response) {


    console.log("response :", response.data.token);

    if (response.data.token !== null) {

      AsyncStorage.setItem('Token', response.data.token);
      AsyncStorage.setItem('Islogin', 'Yes');

      //this.props.navigation.navigate('HomePage').bind(this);
      
      // this.setState({otp:response.data.otp})
  }

      console.log("response :", response.data.token);

      //this.setState({ error: '' , loading: false });

      //this.props.navigation.navigate('HomePage');

      console.log("navigate :");
      RootNavigation.navigate('HomePage');
      //navigate('HomePage');

      //response => this.setState({ ProjectsDetails: response.data.data.original })
 })
 .then(function () {
  
  

 })
 .catch(function (error) {

  console.log("error :",error);
    //console.log("error :", error.response.data);    
    //this.setState({ error: 'Invalid Credentials' , loading: false });


 });
 
//.bind(this)

}





  onhaveaccountPress = () => {
   
    this.props.navigation.navigate('UserRegistration');
  }

  renderButton() {
    if (this.state.loading) {
      //return <Spinner size="small" />;
    }

    return (
      <CusButton onPress={this.onButtonPress.bind(this)}>
       Log In
      </CusButton>
    );
  }


//https://github.com/StephenGrider/ReactNativeReduxCasts/tree/070-login-form-scaffolding/auth/src/components/common

  render() {

    return (

        <View>

       
        <Card>

        <Text style={styles.errorTextStyle}>
            {this.state.error}
            </Text>

           
            <CardSection>
                
                <Input 
                placeholder="email address"
                label ="Email"
                onChangeText={email => this.setState({ email })}
                value={this.state.email}
                 />

            </CardSection>
            <CardSection >
                    <Input
                    secureTextEntry
                    placeholder="password"
                    label="Password"
                    value={this.state.password}
                    onChangeText={password => this.setState({ password })}
                />
            </CardSection>

            

            <CardSection>
                {this.renderButton()}

                

            </CardSection>

            <CardSection>
               
  
                <TouchableOpacity onPress={this.onhaveaccountPress}>
                <Text>
                  Create an account ? 
                </Text>
                </TouchableOpacity>

            </CardSection>
            

        </Card>
      
        </View>
    );
  }
}


const styles = {

    errorTextStyle: {
        fontSize: 20,
        alignSelf: 'center',
        color: 'red'
      },

};
