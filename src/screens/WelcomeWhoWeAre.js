/* eslint-disable react-native/no-inline-styles */
import React from 'react';
import {
  View,
  Text,
  Image,
  Picker,
  TextInput,
  Button,
  Alert,
  StyleSheet,
} from 'react-native';

import Video from 'react-native-video';

export default class WelcomeWhoWeAre extends React.Component {
  static navigationOptions = ({navigation}) => ({
    headerShown: true,
    gesturesEnabled: false,
  });

  constructor(props) {
    super(props);
    this.state = {
      screenType: '', Videopaused:false
    };
  }

  onPress() {


    console.log('onPress');
    /* if (this.Video != null) {
      console.log('sdsd');
      this.Video.seek(0);
    } */

    this.setState({ Videopaused: true })
    

    this.props.navigation.navigate('StartupList');
  }

  //onPress={() => }

  componentDidMount() {}

  render() {
    return (
      <View style={{flex: 1}}>
        <View
          style={{
            flex: 1,
            borderColor: 'black',
            borderWidth: 1,
            alignItems: 'center',
            justifyContent: 'center',
          }}>
          <Video
            source={require('../images/dolbycanyon.mp4')}
            ref={ref => {
              this.player = ref;
            }} // Store reference
            style={styles.backgroundVideo}
            paused = {this.state.Videopaused}
            

          />
        </View>

        <View style={{flex: 1, borderColor: 'black', borderWidth: 1}}>
          <Text
            style={{
              fontSize: 20,
              marginTop: 10,
              justifyContent: 'center',
              alignItems: 'center',
              fontWeight: 'bold',
              textAlign: 'center',
            }}>
            Whats is xxxxxx
          </Text>

          <Text>
            Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit
            Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit
            Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit{' '}
          </Text>

          <Text
            style={{
              fontSize: 20,
              marginTop: 10,
              justifyContent: 'center',
              alignItems: 'center',
              fontWeight: 'bold',
              textAlign: 'center',
            }}>
            Investors
          </Text>

          <Text>
            Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit
            Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit
            Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit
            Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit
            Lorem ipsum dolor sit
          </Text>

          <View style={{flex: 1, justifyContent: 'flex-end', marginBottom: 0}}>
            <Button
              title="Startup List"
              color="#f194ff"
              onPress={this.onPress.bind(this)}
            />
          </View>
        </View>
      </View>
    );
  }
}

var styles = StyleSheet.create({
  backgroundVideo: {
    justifyContent: 'center',
    alignItems: 'center',
    position: 'absolute',
    top: 10,
    left: 15,
    bottom: 0,
    right: 0,
  },
});
