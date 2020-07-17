/* eslint-disable no-trailing-spaces */
/* eslint-disable prettier/prettier */
/* eslint-disable react-native/no-inline-styles */
import React from 'react';

import { View, Image, Picker, TextInput, SafeAreaView, FlatList, ListView, TouchableOpacity, ScrollView, StyleSheet, Text, Icon } from 'react-native';
import CheckBox from 'react-native-check-box';

//import { useNavigation } from '@react-navigation/native';
import { CusButton } from '../components/common/CusButton';
import { Card } from '../components/common/Card';
import { CardSection } from '../components/common/CardSection';
//import { Header } from '../components/common/Header';
//import { Input } from '../components/common/Input';
import { Spinner } from '../components/common/Spinner';
import { HeaderwithAccount } from '../components/common/HeaderwithAccount';

import { DrawerActions } from '@react-navigation/native';

//import RadioGroup from 'react-native-radio-buttons-group';



export default class HomePage extends React.Component {
  static navigationOptions = ({ navigation }) => ({

    headerShown: true,

    //gesturesEnabled: false,

    // console.log('sdsdsdsdsd');
  });

  constructor(props) {



    super(props);
    this.state = {

      smscode: '', loggedIn: false,

    };
  }


  componentDidMount() {
    
  }


  onSelectScreen = (id) => {
    //console.log(id);
    this.props.navigation.navigate('StartupDetails', { data: id });
  };


  onMenuPress() {



    //close drawer
    console.log("onmenu=========>", this.props.navigation)


    this.props.navigation.openDrawer()
  }

  onButtonPress() {
    // const { email, password } = this.state;

    //console.log("on press", email , password);

    this.props.navigation.navigate('StartupList');




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
    console.log("render====>", this.props.navigation)
    return (

      <View>

        <View style={{ height: 56, }}>

          <HeaderwithAccount
            onPress={this.onMenuPress.bind(this)}
            Headingtext={"Home"}

            style={{
              width: 375,
              height: 56,
            }}
          />

        </View>






        <Card>

          <Text
            style={{
              fontSize: 15,
              marginTop: 10,
              justifyContent: 'center',
              alignItems: 'center',
              fontWeight: 'bold',
              textAlign: 'center',
              marginBottom: 10,
            }}>
            Last Updates
            </Text>

          <Text style={{

            marginBottom: 20,
          }} > Lorem ipsum  Lorem ipsum  Lorem ipsum  Lorem ipsum </Text>




          <CardSection>
            <CusButton onPress={this.onButtonPress.bind(this)}>
              Portfolio and Investments
              </CusButton>
          </CardSection>

          <CardSection>
            <CusButton onPress={() => this.props.navigation.openDrawer()}>
              My Affiliate
              </CusButton>
          </CardSection>

          <CardSection>
            <CusButton onPress={this.onButtonPress.bind(this)}>
              My Kid
              </CusButton>
          </CardSection>

          <CardSection>
            <CusButton onPress={this.onButtonPress.bind(this)}>
              My Start up
              </CusButton>
          </CardSection>





        </Card>

      </View>
    );
  }
}


const styles = {

  viewStyle: {
    flexDirection: 'row',
    backgroundColor: '#F8F8F8',
    justifyContent: 'center',
    alignItems: 'center',
    height: 60,
    paddingTop: 15,
    shadowColor: '#000',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.2,
    elevation: 2,
    position: 'relative',
  },
  textStyle: {
    fontSize: 20,
  }
  ,
  errorTextStyle: {
    fontSize: 20,
    alignSelf: 'center',
    color: 'red',
  },

};
