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



export default class InvestmentPage extends React.Component {


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

        <Header headerText="Investment" />
        <Card>

     

            <CardSection>
                
                <Text>Share Cost: $455</Text>
                
              <TextInput></TextInput>


            </CardSection>



            <CardSection>

            <Picker
            selectedValue={this.state.language}
            style={{
              alignItems: 'center',
              height: 50,
              width: 160,
              justifyContent: 'center',
              alignItems: 'center',
              textAlign: 'center',
              alignSelf: 'center',
            }}
            itemStyle={{
              backgroundColor: 'grey',
              color: 'blue',              
              fontSize: 17}}
            >
            <Picker.Item label="Country" value="Country" />

            </Picker>

</CardSection>


<CardSection>

            <Picker
            selectedValue={this.state.language}
            style={{
              alignItems: 'center',
              height: 50,
              width: 160,
              justifyContent: 'center',
              alignItems: 'center',
              textAlign: 'center',
              alignSelf: 'center',
            }}
            itemStyle={{
              backgroundColor: 'grey',
              color: 'blue',              
              fontSize: 17}}
            >
            <Picker.Item label="Visa" value="Visa" />

            </Picker>

</CardSection>


<CardSection>

            <Picker
            selectedValue={this.state.language}
            style={{
              alignItems: 'center',
              height: 50,
              width: 160,
              justifyContent: 'center',
              alignItems: 'center',
              textAlign: 'center',
              alignSelf: 'center',
            }}
            itemStyle={{
              backgroundColor: 'grey',
              color: 'blue',            
              fontSize: 17}}
            >
            <Picker.Item label="CC" value="CC" />

            </Picker>

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
