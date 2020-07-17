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

export default class UserRegistration extends React.Component {


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

  AsyncStorage.getItem('Token')
  .then(value => {
      if (value !== null || value !== '') {
        this.setState({token: value})
      }
      
    // console.log('AAbbb',value);
    if ( this.state.token !== null)
    {
      this.props.navigation.navigate('HomePage');
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
   formData.append('phone', this.state.phone);
   formData.append('age', this.state.selage);
   formData.append('firstname', this.state.firstname);
   formData.append('lastname', this.state.lastname);

  
   axios({
     url: 'https://api.zuzamen.net/api/register',
     method: 'POST',
     data: formData,    
   }) .then(function (response) {


    if (response.data.token !== null) {

      AsyncStorage.setItem('Token', response.data.token);
      AsyncStorage.setItem('Islogin', 'Yes');

      
      
      // this.setState({otp:response.data.otp})
  }

  console.log("response :", response.data.token);

  this.setState({ error: '' , loading: false });

  this.props.navigation.navigate('ConfirmSMS');


      //response => this.setState({ ProjectsDetails: response.data.data.original })
 })
 .then(function () {
  
  

 })
 .catch(function (error) {

  //console.log("error :");
   console.log("error :", error.response.data);
    
    this.setState({ error: 'Email and Password must be valid' , loading: false });


 }.bind(this));
 


}






  onRadioPress= (agedata) => {
   
    let selectedButton = this.state.agedata.find(e => e.selected == true);

   console.log( selectedButton.value );
    this.setState({ selage: selectedButton });

    

  };


  onhaveaccountPress = () => {

    this.props.navigation.navigate('UserLogin');
    

  }

  renderButton() {
    if (this.state.loading) {
      //return <Spinner size="small" />;
    }

    return (
      <CusButton onPress={this.onButtonPress.bind(this)}>
       Create User
      </CusButton>
    );
  }


//https://github.com/StephenGrider/ReactNativeReduxCasts/tree/070-login-form-scaffolding/auth/src/components/common

  render() {

    return (

        <View>

        <Header headerText="User Registration" />
        <Card>

        <Text style={styles.errorTextStyle}>
            {this.state.error}
            </Text>

            <CardSection>
                
                <Input 
                placeholder="First Name"
                label ="First Name"
                onChangeText={firstname => this.setState({ firstname })}
                value={this.state.firstname}
                 />

            </CardSection>


            <CardSection>
                
                <Input 
                placeholder="lastname"
                label ="lastname"
                onChangeText={lastname => this.setState({ lastname })}
                value={this.state.lastname}
                 />

            </CardSection>


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
                
                <Input 
                placeholder="phone numner"
                label ="Phone"
                onChangeText={phone => this.setState({ phone })}
                value={this.state.phone}
                 />

            </CardSection>

            

            <CardSection>
            <RadioGroup radioButtons={this.state.agedata} onPress={() => {
                    this.onRadioPress(this.onPress);
            } } />
           
            </CardSection>


            <CardSection>
                {this.renderButton()}

                

            </CardSection>

            <CardSection>
               
  
                <TouchableOpacity onPress={this.onhaveaccountPress}>
                <Text>
                  Already have an account ? 
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
