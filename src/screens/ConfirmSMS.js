/* eslint-disable no-trailing-spaces */
/* eslint-disable prettier/prettier */
/* eslint-disable react-native/no-inline-styles */
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



export default class ConfirmSMS extends React.Component {


constructor(props) {

//console.log(props.navigation);

  super(props);
  this.state = {

    smscode:'', loggedIn: false,
       
  };
}


componentDidMount() {

  


}


onSelectScreen= (id) => {
  //console.log(id);
  this.props.navigation.navigate('StartupDetails', {data: id} );
};


onButtonPress() {
   // const { email, password } = this.state;

   //console.log("on press", email , password);


   this.props.navigation.navigate('HomePage');

   


  }


  renderButton() {
    if (this.state.loading) {
      return <Spinner size="small" />;
    }

    return (
      <CusButton onPress={this.onButtonPress.bind(this)}>
        Submit
      </CusButton>
    );
  }


//https://github.com/StephenGrider/ReactNativeReduxCasts/tree/070-login-form-scaffolding/auth/src/components/common

  render() {

    return (

        <View>

        <Header headerText="Confirm SMS" />
        <Card>

        <Text style={styles.errorTextStyle}>
            {this.state.error}
            </Text>

            <CardSection>
                
                <Input 
                placeholder="enter sms code"
                label ="SMS Code"
                onChangeText={smscode => this.setState({ smscode })}
                value={this.state.smscode}
                 />

            </CardSection>
           
            <CardSection>
                {this.renderButton()}
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
