/* eslint-disable react-native/no-inline-styles */
import React from 'react';
import {View, Image, Picker, TextInput, Text, Button} from 'react-native';
import CheckBox from 'react-native-check-box';

export default class WelcomeScreen extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      screenType: '',
      isChecked: false,
      ButtonColor: '#50C7C7',
      referalCode: '',
    };
  }

  ReferalCodeChange = text => {
    console.log(text);
    this.setState({referalCode: text});

    if (text == '') {
      
    } else {

      if ( this.state.isChecked == true)
      {
      this.setState({ButtonColor: '#B23AFC'});
      }
    }

  };

  onTickButtonPress = () => {
    if (this.state.isChecked == true) {
      this.setState({isChecked: !this.state.isChecked, ButtonColor: '#50C7C7'});
    } else {
      this.setState({isChecked: !this.state.isChecked, ButtonColor: '#B23AFC'});
    }
  };

  componentDidMount() {}

  render() {
    return (
      <View style={{flex: 1}}>
        <View style={{flex: 1, alignItems: 'center', justifyContent: 'center'}}>
          <Image
            style={{height: 200, resizeMode: 'contain'}}
            source={require('../images/logo.png')}
          />
        </View>
        <View style={{flex: 1}}>
          <Text
            style={{
              fontSize: 20,
              justifyContent: 'center',
              alignItems: 'center',
              fontWeight: 'bold',
              textAlign: 'center',
            }}>
            Please select a language
          </Text>
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
              fontSize: 17,
            }}>
            <Picker.Item label="English" value="English" />
            <Picker.Item label="Hebrew" value="Hebrew" />
            <Picker.Item label="Russian" value="Russian" />
          </Picker>
          <Text
            style={{
              fontSize: 20,
              marginTop: 10,
              justifyContent: 'center',
              alignItems: 'center',
              fontWeight: 'bold',
              textAlign: 'center',
            }}>
            Referral Code
          </Text>
          <TextInput
            style={{
              height: 40,
              borderColor: 'gray',
              borderWidth: 1,
              margin: 15,
              marginLeft: 50,
              marginRight: 50,
            }}
            onChangeText={this.ReferalCodeChange}
          />
          <CheckBox
            style={{
              flex: 1,
              paddingLeft: 30,
              justifyContent: 'center',
              alignItems: 'center',
              alignSelf: 'center',
            }}
            onClick={this.onTickButtonPress}
            isChecked={this.state.isChecked}
            rightText={'I agree the terms and conditions'}
          />
          <Button
            color={this.state.ButtonColor}
            title="Press me"
            onPress={() => this.props.navigation.navigate('WelcomeWhoWeAre')}
          />
        </View>
      </View>
    );
  }
}
